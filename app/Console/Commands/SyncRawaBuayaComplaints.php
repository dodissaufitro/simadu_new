<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Models\Complaint;
use App\Models\Tower;
use App\Models\lantai;
use App\Models\Unit;
use App\Models\User;
use App\Models\Rusun;
use ZipArchive;
use DOMDocument;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

class SyncRawaBuayaComplaints extends Command
{
    protected $signature = 'sync:rawabuaya-complaints {--fresh : Whether to truncate complaints first}';
    protected $description = 'Sync complaints from Laporan Pekerjaan Rawa Buaya.xlsx (semua sheet)';

    public function handle()
    {
        $inputFileName = base_path('Laporan Pekerjaan Rawa Buaya.xlsx');

        if (!file_exists($inputFileName)) {
            $this->error("File Laporan Pekerjaan Rawa Buaya.xlsx not found in root directory.");
            return;
        }

        $this->info("Menghapus data keluhan lama dari database...");
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Complaint::truncate();
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $this->info("Membaca data text dari Excel (Semua Sheet)...");
        $reader = IOFactory::createReader('Xlsx');
        $spreadsheet = $reader->load($inputFileName);
        
        $dataBySheet = [];

        foreach ($spreadsheet->getAllSheets() as $worksheet) {
            $sheetName = $worksheet->getTitle();
            $this->info(" - Membaca sheet: $sheetName");
            $highestRow = $worksheet->getHighestRow();

            $dataBySheet[$sheetName] = [];
            for ($row = 2; $row <= $highestRow; $row++) { 
                $rowData = $worksheet->rangeToArray('A' . $row . ':G' . $row, NULL, TRUE, FALSE)[0];
                if (trim((string)$rowData[2]) !== '' && $rowData[2] !== 'Lokasi') {
                    $dataBySheet[$sheetName][$row] = [
                        'lokasi' => $rowData[2],
                        'kerusakan' => $rowData[3],
                        'tanggal_laporan' => $rowData[4],
                        'tanggal_pengerjaan' => $rowData[5],
                        'images' => [] 
                    ];
                }
            }
        }

        $this->info("Membaca dan memetakan gambar dari file ZIP (Excel)...");
        $zip = new ZipArchive;
        if ($zip->open($inputFileName) === TRUE) {
            // 1. Map rId to sheet path from workbook rels
            $workbookRelsXml = $zip->getFromName('xl/_rels/workbook.xml.rels');
            $workbookRelsDoc = new DOMDocument();
            if ($workbookRelsXml) {
                $workbookRelsDoc->loadXML($workbookRelsXml);
                $workbookRels = [];
                foreach ($workbookRelsDoc->getElementsByTagName('Relationship') as $rel) {
                    $workbookRels[$rel->getAttribute('Id')] = $rel->getAttribute('Target');
                }
            }

            // 2. Read workbook.xml to get sheet names in order
            $workbookXml = $zip->getFromName('xl/workbook.xml');
            $workbookDoc = new DOMDocument();
            $sheetMappings = [];
            if ($workbookXml) {
                $workbookDoc->loadXML($workbookXml);
                foreach ($workbookDoc->getElementsByTagName('sheet') as $sheet) {
                    $name = $sheet->getAttribute('name');
                    $rId = $sheet->getAttribute('r:id');
                    $sheetPath = 'xl/' . $workbookRels[$rId];
                    
                    // 3. Find drawing path from sheet rels
                    $sheetRelsPath = dirname($sheetPath) . '/_rels/' . basename($sheetPath) . '.rels';
                    $sheetRelsXml = $zip->getFromName($sheetRelsPath);
                    $drawingPath = null;
                    if ($sheetRelsXml) {
                        $sheetRelsDoc = new DOMDocument();
                        $sheetRelsDoc->loadXML($sheetRelsXml);
                        foreach ($sheetRelsDoc->getElementsByTagName('Relationship') as $rel) {
                            if (strpos($rel->getAttribute('Type'), 'drawing') !== false) {
                                $drawingPath = 'xl/drawings/' . basename($rel->getAttribute('Target'));
                            }
                        }
                    }
                    $sheetMappings[$name] = $drawingPath;
                }
            }

            // 4. Extract images for each sheet
            foreach ($dataBySheet as $sheetName => &$rowsData) {
                if (empty($rowsData)) continue;
                
                $drawingPath = $sheetMappings[$sheetName] ?? null;
                if ($drawingPath) {
                    $drawingXml = $zip->getFromName($drawingPath);
                    if ($drawingXml) {
                        // get drawing rels
                        $drawingRelsPath = 'xl/drawings/_rels/' . basename($drawingPath) . '.rels';
                        $drawingRelsXml = $zip->getFromName($drawingRelsPath);
                        $rels = [];
                        if ($drawingRelsXml) {
                            $drawingRelsDoc = new DOMDocument();
                            $drawingRelsDoc->loadXML($drawingRelsXml);
                            foreach ($drawingRelsDoc->getElementsByTagName('Relationship') as $rel) {
                                $rels[$rel->getAttribute('Id')] = $rel->getAttribute('Target');
                            }
                        }

                        $drawingDoc = new DOMDocument();
                        $drawingDoc->loadXML($drawingXml);
                        $anchors = $drawingDoc->getElementsByTagName('twoCellAnchor');
                        foreach ($anchors as $anchor) {
                            $from = $anchor->getElementsByTagName('from')->item(0);
                            $col = (int)$from->getElementsByTagName('col')->item(0)->nodeValue;
                            $row = (int)$from->getElementsByTagName('row')->item(0)->nodeValue + 1; 

                            $blip = $anchor->getElementsByTagName('blip')->item(0);
                            if ($blip) {
                                $embed = $blip->getAttribute('r:embed');
                                if (isset($rels[$embed])) {
                                    $imagePath = 'xl/media/' . basename($rels[$embed]);
                                    
                                    if (isset($rowsData[$row])) {
                                        // Extract image to storage
                                        $imageContent = $zip->getFromName($imagePath);
                                        if ($imageContent) {
                                            $extension = pathinfo($imagePath, PATHINFO_EXTENSION);
                                            $filename = uniqid('rawabuaya_') . '.' . $extension;
                                            $storagePath = 'public/complaints/' . $filename;
                                            
                                            if (!is_dir(storage_path('app/public/complaints'))) {
                                                mkdir(storage_path('app/public/complaints'), 0755, true);
                                            }
                                            
                                            file_put_contents(storage_path('app/' . $storagePath), $imageContent);
                                            $rowsData[$row]['images'][] = 'complaints/' . $filename;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
            $zip->close();
        }

        $totalData = 0;
        foreach ($dataBySheet as $sheetName => $rowsData) {
            $totalData += count($rowsData);
        }
        $this->info("Memproses $totalData baris data ke database...");

        $user = User::first(); 
        if (!$user) {
            $user = User::create([
                'name' => 'System Sync',
                'email' => 'sync@example.com',
                'password' => bcrypt('password'),
            ]);
        }

        $defaultRusun = Rusun::firstOrCreate(
            ['name' => 'Rusunawa Lokbin Rawa Buaya'],
            ['address' => 'Jakarta']
        );

        $imported = 0;
        foreach ($dataBySheet as $sheetName => $rowsData) {
            foreach ($rowsData as $rowNum => $data) {
                // $this->info("Memproses [$sheetName] baris $rowNum");
                
                $lines = explode("\n", $data['lokasi']);
                $towerName = 'Tower Unknown';
                $lantaiName = '1';
                $unitName = 'Unknown';
                
                $detailLine = isset($lines[1]) ? $lines[1] : $lines[0];
                
                if (preg_match('/Tower\s+([A-Z0-9]+)/i', $detailLine, $matches)) {
                    $towerName = 'Tower ' . $matches[1];
                }
                if (preg_match('/Lantai\s+([0-9]+)/i', $detailLine, $matches)) {
                    $lantaiName = 'Lantai ' . $matches[1];
                }
                if (preg_match('/Nomor\s+([0-9A-Z]+)/i', $detailLine, $matches)) {
                    $unitName = $matches[1];
                }

                $tower = Tower::firstOrCreate(['name' => $towerName], ['rusun_id' => $defaultRusun->id]);
                $lantai = lantai::firstOrCreate(['name' => $lantaiName, 'tower_id' => $tower->id]);
                $unit = Unit::firstOrCreate(['name' => $unitName, 'lantai_id' => $lantai->id]);

                $images = $data['images'];
                
                $tanggalLaporan = null;
                if (!empty($data['tanggal_laporan'])) {
                    $dateStr = str_replace(
                        ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                        ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                        trim($data['tanggal_laporan'])
                    );
                    try {
                        $tanggalLaporan = Carbon::parse($dateStr);
                    } catch (\Exception $e) {
                        $tanggalLaporan = now();
                    }
                } else {
                    $tanggalLaporan = now();
                }

                $tanggalPengerjaan = null;
                if (!empty($data['tanggal_pengerjaan'])) {
                    $dateStr = str_replace(
                        ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                        ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                        trim($data['tanggal_pengerjaan'])
                    );
                    try {
                        $tanggalPengerjaan = Carbon::parse($dateStr);
                    } catch (\Exception $e) {
                        $tanggalPengerjaan = null;
                    }
                }
                
                $photo1 = isset($images[0]) ? $images[0] : 'complaints/placeholder.jpg';
                $photo2 = isset($images[1]) ? $images[1] : null;
                $photo3 = isset($images[2]) ? $images[2] : null;

                Complaint::create([
                    'tower_id' => $tower->id,
                    'unit_id' => $unit->id,
                    'user_id' => $user->id,
                    'complaint' => $data['kerusakan'] ?? '-',
                    'photo1' => $photo1,
                    'photo2' => $photo2,
                    'photo3' => $photo3,
                    'status' => 'finish', 
                    'tanggal_eksekusi' => $tanggalPengerjaan,
                    'created_at' => $tanggalLaporan,
                    'updated_at' => $tanggalLaporan,
                ]);
                $imported++;
            }
        }

        $this->info("Sinkronisasi Selesai! $imported data berhasil diimport.");
    }
}
