<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Complaint>
 */
class ComplaintFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // $table->foreignId('unit_id')->nullable()->constrained('units')->onDelete('cascade');
            // $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            // $table->foreignId('user_verified')->nullable()->constrained('users')->onDelete('cascade');
            // $table->text('complaint');
            // $table->text('photo1');
            // $table->text('photo2')->nullable();
            // $table->text('photo3')->nullable();
            // $table->enum('status',['accept','finish','request','deny','re-schedule'])->nullable();
            // $table->date('tanggal_eksekusi')->nullable();
            // $table->text('keterangan')->nullable();

            'unit_id' => $this->faker->numberBetween(1, 10),
            'user_id' => $this->faker->numberBetween(2, 5),
            'user_verified' => $this->faker->numberBetween(2, 5),
            'complaint' => $this->faker->sentence(),
            'photo1' => $this->faker->imageUrl(),
            'photo2' => $this->faker->imageUrl(),
            'photo3' => $this->faker->imageUrl(),
            'status' => $this->faker->randomElement(['accept', 'finish', 'request', 'deny', 're-schedule']),
            'tanggal_eksekusi' => $this->faker->date(),
            'keterangan' => $this->faker->sentence(),
        ];
    }
}
