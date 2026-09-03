<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

class ResetProductionData extends Command
{
    protected $signature = 'app:reset-data';
    protected $description = 'Hapus semua data KECUALI tabel users dan hak akses/roles';

    public function handle()
    {
        $this->warn('Perintah ini akan menghapus semua data (Complaint, Tower, Unit, dll) KECUALI data Users dan Roles.');
        if (!$this->confirm('Apakah Anda yakin ingin melanjutkan?')) {
            return;
        }

        // Tabel yang TIDAK BOLEH dihapus
        $blacklist = [
            'users', 
            'roles', 
            'permissions', 
            'model_has_permissions', 
            'model_has_roles', 
            'role_has_permissions', 
            'migrations', 
            'password_reset_tokens', 
            'personal_access_tokens', 
            'failed_jobs'
        ];

        // Ambil semua nama tabel di database
        $tables = DB::select('SHOW TABLES');

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        foreach ($tables as $table) {
            $tableName = array_values((array)$table)[0];

            if (!in_array($tableName, $blacklist)) {
                $this->info("Membersihkan tabel: {$tableName}...");
                DB::table($tableName)->truncate();
            }
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $this->info('Semua data berhasil dibersihkan (kecuali Users dan Roles)!');
        
        if ($this->confirm('Apakah Anda ingin menjalankan proses Import Excel sekarang?')) {
            Artisan::call('import:complaints');
            $this->info(Artisan::output());
        }
    }
}
