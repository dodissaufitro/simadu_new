<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

$tables = ['users', 'roles', 'permissions', 'model_has_roles', 'role_has_permissions', 'model_has_permissions'];
$seederCode = "<?php\n\nnamespace Database\Seeders;\n\nuse Illuminate\Database\Seeder;\nuse Illuminate\Support\Facades\DB;\n\nclass SimadusUserSeeder extends Seeder\n{\n    public function run()\n    {\n        DB::statement('SET FOREIGN_KEY_CHECKS=0;');\n";

// Disable foreign key checks for local import
DB::statement('SET FOREIGN_KEY_CHECKS=0;');

foreach ($tables as $table) {
    // 1. Ambil data dari simadus
    $data = DB::connection('mysql')->select("SELECT * FROM simadus.{$table}");
    
    // Truncate tabel saat ini
    DB::table($table)->truncate();
    
    // Konversi ke array
    $insertData = array_map(function($item) { return (array) $item; }, $data);
    
    // Import ke lokal
    if (!empty($insertData)) {
        foreach (array_chunk($insertData, 50) as $chunk) {
            DB::table($table)->insert($chunk);
        }
    }

    // 2. Tulis ke file Seeder
    $seederCode .= "        DB::table('{$table}')->truncate();\n";
    if (!empty($insertData)) {
        $arrayExport = var_export($insertData, true);
        $seederCode .= "        \$data_{$table} = {$arrayExport};\n";
        $seederCode .= "        foreach (array_chunk(\$data_{$table}, 50) as \$chunk) {\n            DB::table('{$table}')->insert(\$chunk);\n        }\n";
    }
}

DB::statement('SET FOREIGN_KEY_CHECKS=1;');

$seederCode .= "        DB::statement('SET FOREIGN_KEY_CHECKS=1;');\n    }\n}\n";

File::put(base_path('database/seeders/SimadusUserSeeder.php'), $seederCode);
echo "Import selesai dan SimadusUserSeeder.php berhasil dibuat!\n";
