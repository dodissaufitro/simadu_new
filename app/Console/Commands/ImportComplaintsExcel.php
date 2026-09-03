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
    protected $signature = 'import:complaints';

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

        $this->info("Loading Excel file...");
        $spreadsheet = IOFactory::load($file);

        $user = User::where('email', 'user@example.com')->first();
        if (!$user) {
            $user = User::first(); // Fallback
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

                Complaint::create([
                    'tower_id' => $towerId ?? 1, // Fallback if format is different
                    'unit_id' => $unitId ?? 1,   // Fallback
                    'user_id' => $user ? $user->id : 1,
                    'complaint' => $kerusakan ?? '-',
                    'photo1' => $photo1Path ?? 'complaints/placeholder.jpg', // use placeholder
                    'photo2' => $photo2Path,
                    'status' => 'request',
                    'created_at' => $tanggalLaporan,
                    'updated_at' => $tanggalLaporan,
                ]);
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
            mkdir(dirname($fullPath), 0755, true);
        }

        if ($drawing instanceof MemoryDrawing) {
            ob_start();
            call_user_func(
                $drawing->getRenderingFunction(),
                $drawing->getImageResource()
            );
            $imageContents = ob_get_contents();
            ob_end_clean();
            file_put_contents($fullPath, $imageContents);
        } elseif ($drawing instanceof Drawing) {
            $zipReader = fopen($drawing->getPath(), 'r');
            $imageContents = '';
            while (!feof($zipReader)) {
                $imageContents .= fread($zipReader, 1024);
            }
            fclose($zipReader);
            file_put_contents($fullPath, $imageContents);
        } else {
            return null;
        }

        return 'complaints/' . $filename;
    }
}
