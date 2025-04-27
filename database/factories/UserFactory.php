<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique(true)->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'phone' => $this->faker->phoneNumber(),
            'unit_id' => \App\Models\Unit::factory(),
            // 'roles' => 'user',
            // 'role' => $this->faker->randomElement(['admin', 'user']),
            'remember_token' => Str::random(10),



        ];
    }

    public function withUserRole()
    {
        $userRole = Role::firstOrCreate(['name' => 'user', 'guard_name' => 'web']);
        return $this->afterCreating(function (User $user) {
            $user->assignRole('user'); // Assign role "user" setelah user dibuat
        });
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
