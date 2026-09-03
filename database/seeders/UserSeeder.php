<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $roles = ['super_admin', 'koordinator', 'teknisi', 'user'];
        $roleModels = [];

        foreach ($roles as $roleName) {
            $roleModels[$roleName] = Role::firstOrCreate(['name' => $roleName, 'guard_name' => 'web']);
        }

        foreach ($roles as $roleName) {
            $user = User::withoutEvents(function () use ($roleName) {
                return User::firstOrCreate(
                    ['email' => $roleName . '@example.com'],
                    [
                        'name' => ucwords(str_replace('_', ' ', $roleName)),
                        'password' => bcrypt('password'), // password is 'password'
                        'phone' => '081234567890',
                    ]
                );
            });

            $user->assignRole($roleModels[$roleName]);
        }
    }
}
