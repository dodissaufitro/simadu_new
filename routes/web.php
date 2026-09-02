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
        // Jika folder storage sudah ada (tapi bukan symlink) atau symlink rusak, hapus dulu!
        if (file_exists($linkFolder) || is_link($linkFolder)) {
            // Pada Windows jalankan rmdir, pada Linux hapus link
            if (is_link($linkFolder)) {
                unlink($linkFolder);
            } else {
                // Jangan pakai rmdir rekursif dari web untuk keamanan, asumsikan kosong atau ubah nama
                rename($linkFolder, $_SERVER['DOCUMENT_ROOT'] . '/storage_backup_' . time());
            }
        }
        
        symlink($targetFolder, $linkFolder);
        return 'Sukses: Symlink manual berhasil dipaksa (Forced) dibuat di ' . $linkFolder . '<br>Silakan upload ulang gambarnya jika masih tidak muncul.';
    } catch (\Exception $e) {
        return 'Gagal: ' . $e->getMessage();
    }
});
