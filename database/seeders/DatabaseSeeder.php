<?php

namespace Database\Seeders;

use App\Models\lantai;
use App\Models\Rusun;
use App\Models\Tower;
use App\Models\Unit;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

        Rusun::factory(10)->create();
        Tower::factory(10)->create();
        lantai::factory(10)->create();
        Unit::factory(10)->create();
    }
}
