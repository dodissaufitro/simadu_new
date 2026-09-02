<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk memperbaiki gambar (menjalankan artisan storage:link)
Route::get('/fix-image', function () {
    try {
        \Illuminate\Support\Facades\Artisan::call('storage:link');
        return 'Sukses: Symlink berhasil dibuat dengan Artisan!';
    } catch (\Exception $e) {
        return 'Gagal: ' . $e->getMessage();
    }
});

// Route untuk memperbaiki gambar khusus cPanel/Shared Hosting (Force Manual Symlink)
Route::get('/fix-image-cpanel', function () {
    $targetFolder = storage_path('app/public');
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
    
    try {
        if (file_exists($linkFolder) || is_link($linkFolder)) {
            if (is_link($linkFolder)) {
                unlink($linkFolder);
            } else {
                rename($linkFolder, $_SERVER['DOCUMENT_ROOT'] . '/storage_backup_' . time());
            }
        }
        symlink($targetFolder, $linkFolder);
        return 'Sukses: Symlink manual berhasil dipaksa (Forced) dibuat di ' . $linkFolder . '<br>Silakan upload ulang gambarnya jika masih tidak muncul.';
    } catch (\Exception $e) {
        return 'Gagal: ' . $e->getMessage();
    }
});

// ROUTE ALTERNATIF: Melayani gambar langsung via PHP (Tanpa Symlink)
// Jika Symlink diblokir oleh hosting, route ini akan mengambil alih dan menampilkan gambar secara paksa dari folder storage lokal.
Route::get('/storage/{folder}/{filename}', function ($folder, $filename) {
    $path = storage_path('app/public/' . $folder . '/' . $filename);
    
    if (!file_exists($path)) {
        abort(404);
    }
    
    return response()->file($path);
})->where('filename', '.*');
