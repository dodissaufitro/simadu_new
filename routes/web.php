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

// Route untuk memperbaiki gambar khusus cPanel/Shared Hosting (Manual Symlink)
Route::get('/fix-image-cpanel', function () {
    $targetFolder = storage_path('app/public');
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
    
    try {
        if (file_exists($linkFolder)) {
            return 'Symlink sudah ada atau folder storage sudah ada di public_html.';
        }
        symlink($targetFolder, $linkFolder);
        return 'Sukses: Symlink manual berhasil dibuat di ' . $linkFolder;
    } catch (\Exception $e) {
        return 'Gagal: ' . $e->getMessage();
    }
});
