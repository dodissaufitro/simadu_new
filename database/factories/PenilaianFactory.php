<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penilaian>
 */
class PenilaianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // $table->foreignId('complaint_id')->constrained('complaints')->onDelete('cascade');
            // $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            // $table->integer('rating_layanan');
            // $table->integer('rating_kualitas');
            // $table->integer('rating_kecepatan');
            // $table->text('komentar')->nullable();

            'complaint_id' => \App\Models\Complaint::factory(),
            'user_id' => \App\Models\User::factory(),
            'rating_layanan' => $this->faker->numberBetween(1, 5),
            'rating_kualitas' => $this->faker->numberBetween(1, 5),
            'rating_kecepatan' => $this->faker->numberBetween(1, 5),
            'komentar' => $this->faker->sentence(),

        ];
    }
}
