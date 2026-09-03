<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Complaint;

$c = Complaint::where('photo1', '!=', '-')->first();
if (!$c) {
    die("No complaint with photo1 found.\n");
}

$path = $c->photo1;
echo "Path in DB: " . $path . "\n";
$publicPath = public_path('storage/' . $path);
echo "Public Path: " . $publicPath . "\n";
echo "Exists: " . (file_exists($publicPath) ? 'Yes' : 'No') . "\n";
