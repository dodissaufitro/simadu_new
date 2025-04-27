<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use function Illuminate\Support\enum_value;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tower>
 */
class TowerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['Tower A', 'Tower B', 'Tower 1', 'Tower 2','Tower 3','Tower 4','Tower 5','Tower 6','Tower 7','Tower 8']),
            'rusun_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
