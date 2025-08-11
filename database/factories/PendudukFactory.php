<?php

namespace Database\Factories;

use App\Models\Penduduk;
use App\Models\Wilayah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penduduk>
 */
class PendudukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
                'nik' => fake()->unique()->numerify('################'),
                'nama' => fake()->name(),
                'alamat' => fake()->address('id_ID'),
                // 'wilayah_id' => Wilayah::inRandomOrder()->first()->id // Assuming wilayah with ID 1 exists
                'wilayah_id' => Wilayah::factory(), // Create a new Wilayah instance for each Penduduk'
            ];
    }
}