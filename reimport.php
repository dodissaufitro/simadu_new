<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Complaint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

// Disable foreign key checks if necessary
DB::statement('SET FOREIGN_KEY_CHECKS=0;');
Complaint::truncate();
DB::statement('SET FOREIGN_KEY_CHECKS=1;');

$files = glob(storage_path('app/public/complaints/*'));
foreach($files as $file) {
    if(is_file($file) && basename($file) !== 'placeholder.jpg') {
        unlink($file);
    }
}

echo "Old data and images wiped.\n";
echo "Running import...\n";
Artisan::call('import:complaints');
echo Artisan::output();
echo "Re-import complete.\n";
