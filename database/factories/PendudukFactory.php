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
        $faker = \Faker\Factory::create('id_ID');

        return [
            //
            'nik' => $faker->unique()->numerify('################'),
            'nama' => $faker->name(),
            'alamat' => $faker->address(),
            'wilayah_id' => Wilayah::inRandomOrder()->first()->id ?? Wilayah::factory()->create()->id, // Fallback to ID 1 if no wilayah exists
                // 'nik' => fake()->unique()->numerify('################'),
                // 'nama' => fake()->name(),
                // 'alamat' => fake()->address('id_ID'),
                // // 'wilayah_id' => Wilayah::inRandomOrder()->first()->id ?? Wilayah::factory() // Assuming wilayah with ID 1 exists
                // 'wilayah_id' => Wilayah::inRandomOrder()->first()->id, // Fallback to ID 1 if no wilayah exists
            ];
    }
}
