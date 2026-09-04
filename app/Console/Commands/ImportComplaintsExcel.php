<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Models\Complaint;
use App\Models\Tower;
use App\Models\lantai;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use PhpOffice\PhpSpreadsheet\Worksheet\MemoryDrawing;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class ImportComplaintsExcel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:complaints {--fresh : Whether to truncate complaints first}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import complaints from LAPORAN A.xlsx';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $file = base_path('LAPORAN A.xlsx');
        if (!file_exists($file)) {
            $this->error("File LAPORAN A.xlsx not found in root.");
            return;
        }

        // --- CLEANUP DATA & GAMBAR LAMA ---
        $this->info("Menghapus data keluhan lama dari database...");
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Models\Complaint::truncate();
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $this->info("Membersihkan gambar lama dari direktori...");
        $complaintsPath = storage_path('app/public/complaints');
        if (\Illuminate\Support\Facades\File::exists($complaintsPath)) {
            $files = \Illuminate\Support\Facades\File::files($complaintsPath);
            foreach ($files as $f) {
                // Hapus semua file KECUALI placeholder.jpg
                if ($f->getFilename() !== 'placeholder.jpg') {
                    \Illuminate\Support\Facades\File::delete($f->getPathname());
                }
            }
        } else {
            \Illuminate\Support\Facades\File::makeDirectory($complaintsPath, 0755, true);
        }
        $this->info("Gambar lama berhasil dihapus.");

        $this->info("Loading Excel file...");
        $spreadsheet = IOFactory::load($file);

        $user = User::where('email', 'user@example.com')->first();
        if (!$user) {
            $user = User::first(); 
        }

        // Jika tabel User benar-benar kosong (karena migrate:fresh dan belum di-seed)
        if (!$user) {
            $this->info("Tabel user kosong. Membuat user dummy otomatis...");
            $user = User::create([
                'name' => 'Default User',
                'email' => 'user@example.com',
                'password' => bcrypt('password'),
                // Jika butuh tower_id, unit_id, lantai_id, sesuaikan dengan logic. 
                // Untuk tahap ini biarkan nullable jika migration mengizinkan, 
                // atau diisi dengan ID 1 jika terpaksa.
            ]);
        }

        // Pastikan ada Rusun default agar relasi Tower tidak error di Production
        $defaultRusun = \App\Models\Rusun::firstOrCreate(
            ['name' => 'Rusun Default'],
            ['address' => 'Jakarta']
        );
        $defaultRusunId = $defaultRusun->id;

        foreach ($spreadsheet->getAllSheets() as $worksheet) {
            $this->info("Processing sheet: " . $worksheet->getTitle());
            $rows = $worksheet->toArray();

            // Prepare drawings mapped by coordinate (e.g. "B2" => Drawing object)
            $drawingsMap = [];
            foreach ($worksheet->getDrawingCollection() as $drawing) {
                $drawingsMap[$drawing->getCoordinates()] = $drawing;
            }

            foreach ($rows as $rowIndex => $row) {
                // $rows is 0-indexed, but Excel coordinates are 1-indexed. Row 1 is header (index 0).
                $excelRow = $rowIndex + 1;
                if ($excelRow == 1) continue; // Skip header

                $no = $row[0];
                $lokasi = $row[3]; // e.g. D.03.04
                $kerusakan = $row[4];
                if (empty($lokasi) && empty($kerusakan)) continue;

                $this->info("Processing row $excelRow: $lokasi");

                // Parse lokasi (Tower, Lantai, Unit)
                $towerId = null;
                $unitId = null;
                if (!empty($lokasi)) {
                    $parts = explode('.', $lokasi);
                    if (count($parts) >= 3) {
                        $towerName = "Tower " . $parts[0];
                        $lantaiName = $parts[1];
                        $unitName = $parts[2];

                        $tower = Tower::firstOrCreate(['name' => $towerName], ['rusun_id' => $defaultRusunId]); // default rusun_id
                        $lantai = lantai::firstOrCreate(['name' => $lantaiName, 'tower_id' => $tower->id]);
                        $unit = Unit::firstOrCreate(['name' => $unitName, 'lantai_id' => $lantai->id]);

                        $towerId = $tower->id;
                        $unitId = $unit->id;
                    }
                }

                // Handle images
                $photo1Path = $this->extractAndSaveDrawing($drawingsMap, "B{$excelRow}");
                $photo2Path = $this->extractAndSaveDrawing($drawingsMap, "C{$excelRow}");

                $tanggalLaporan = !empty($row[5]) ? $this->parseDate($row[5]) : now();

                // Fetch the specific users based on email
                $penghuniId = \App\Models\User::where('email', 'penghuni@gmail.com')->value('id') ?? 1;
                $koorId = \App\Models\User::where('email', 'koordinator@gmail.com')->value('id');
                $techId = \App\Models\User::where('email', 'teknisi@gmail.com')->value('id');

                $complaintObj = Complaint::create([
                    'tower_id' => $towerId ?? 1, // Fallback if format is different
                    'unit_id' => $unitId ?? 1,   // Fallback
                    'user_id' => $penghuniId,
                    'koor_id' => $koorId,
                    'complaint' => $kerusakan ?? '-',
                    'photo1' => $photo1Path ?? 'complaints/placeholder.jpg', // use placeholder
                    'photo2' => $photo2Path,
                    'status' => 'request',
                    'created_at' => $tanggalLaporan,
                    'updated_at' => $tanggalLaporan,
                ]);

                if ($techId) {
                    \App\Models\TeknisiOnComplaint::create([
                        'complaint_id' => $complaintObj->id,
                        'teknisi_id' => $techId,
                    ]);
                }
            }
        }
        
        $this->info("Import finished successfully!");
    }

    private function parseDate($val)
    {
        try {
            return Carbon::parse($val);
        } catch (\Exception $e) {
            return now();
        }
    }

    private function extractAndSaveDrawing($drawingsMap, $coordinate)
    {
        if (!isset($drawingsMap[$coordinate])) {
            $this->warn("Gambar tidak ditemukan pada koordinat: $coordinate");
            return null;
        }

        $drawing = $drawingsMap[$coordinate];
        
        // determine extension
        $extension = 'jpg';
        if ($drawing instanceof Drawing && $drawing->getExtension()) {
            $extension = $drawing->getExtension();
        }

        $filename = uniqid('complaint_') . '.' . $extension;
        $path = 'public/complaints/' . $filename;
        $fullPath = storage_path('app/' . $path);

        if (!is_dir(dirname($fullPath))) {
            if (!@mkdir(dirname($fullPath), 0755, true)) {
                $this->error("Gagal membuat direktori untuk gambar. Periksa permission!");
                return null;
            }
        }

        if ($drawing instanceof MemoryDrawing) {
            $renderFunc = $drawing->getRenderingFunction();
            if (!function_exists($renderFunc)) {
                $this->error("Fungsi $renderFunc tidak ditemukan. Pastikan ekstensi php-gd aktif di server Linux Anda!");
                return null;
            }
            ob_start();
            call_user_func(
                $renderFunc,
                $drawing->getImageResource()
            );
            $imageContents = ob_get_contents();
            ob_end_clean();
            if (file_put_contents($fullPath, $imageContents) === false) {
                $this->error("Gagal menyimpan gambar di MemoryDrawing. Periksa write permission!");
                return null;
            }
        } elseif ($drawing instanceof Drawing) {
            $zipReader = fopen($drawing->getPath(), 'r');
            $imageContents = '';
            if ($zipReader) {
                while (!feof($zipReader)) {
                    $imageContents .= fread($zipReader, 1024);
                }
                fclose($zipReader);
                if (file_put_contents($fullPath, $imageContents) === false) {
                    $this->error("Gagal menyimpan gambar di Drawing. Periksa write permission!");
                    return null;
                }
            } else {
                $this->error("Gagal membaca file zip internal Drawing.");
                return null;
            }
        } else {
            return null;
        }

        return 'complaints/' . $filename;
    }
}
