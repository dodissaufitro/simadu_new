<?php

namespace Database\Seeders;

use App\Models\Complaint;
use App\Models\lantai;
use App\Models\Penilaian;
use App\Models\Rusun;
use App\Models\Tower;
use App\Models\Unit;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@test.com',
        //     'password' => bcrypt('password'),
        // ]);

        Rusun::factory(15)->create();
        Tower::factory(15)->create();
        lantai::factory(10)->create();
        Unit::factory(15)->create();
        // User::factory(5)->create();
        // Complaint::factory(20)->create();
        // Penilaian::factory(20)->create();


    }
}
