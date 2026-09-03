<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

$tables = ['rusuns', 'towers', 'lantais', 'units', 'complaints'];
$seederCode = "<?php\n\nnamespace Database\Seeders;\n\nuse Illuminate\Database\Seeder;\nuse Illuminate\Support\Facades\DB;\n\nclass ComplaintSeeder extends Seeder\n{\n    public function run()\n    {\n        DB::statement('SET FOREIGN_KEY_CHECKS=0;');\n";

foreach ($tables as $table) {
    // Ambil data dari tabel lokal
    $data = DB::table($table)->get();
    
    // Konversi ke array
    $insertData = array_map(function($item) { return (array) $item; }, $data->toArray());
    
    // Tulis ke file Seeder
    $seederCode .= "        DB::table('{$table}')->truncate();\n";
    if (!empty($insertData)) {
        $arrayExport = var_export($insertData, true);
        $seederCode .= "        \$data_{$table} = {$arrayExport};\n";
        $seederCode .= "        foreach (array_chunk(\$data_{$table}, 50) as \$chunk) {\n            DB::table('{$table}')->insert(\$chunk);\n        }\n";
    }
}

$seederCode .= "        DB::statement('SET FOREIGN_KEY_CHECKS=1;');\n    }\n}\n";

File::put(base_path('database/seeders/ComplaintSeeder.php'), $seederCode);
echo "ComplaintSeeder.php berhasil dibuat!\n";
