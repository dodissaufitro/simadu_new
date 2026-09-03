<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use PhpOffice\PhpSpreadsheet\IOFactory;

$file = __DIR__ . '/LAPORAN A.xlsx';
$spreadsheet = IOFactory::load($file);
echo "Total sheets: " . $spreadsheet->getSheetCount() . "\n";

foreach ($spreadsheet->getAllSheets() as $index => $worksheet) {
    echo "\nSheet " . $index . " (" . $worksheet->getTitle() . "):\n";
    $drawings = $worksheet->getDrawingCollection();
    echo "  Drawings: " . count($drawings) . "\n";
    foreach ($drawings as $drawing) {
        echo "    - " . get_class($drawing) . " at " . $drawing->getCoordinates() . "\n";
    }
}
