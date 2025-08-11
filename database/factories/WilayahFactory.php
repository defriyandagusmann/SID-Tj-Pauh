<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wilayah>
 */
class WilayahFactory extends Factory
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
            'rt' => $this->faker->numberBetween(1, 10),
            'rw' => $this->faker->numberBetween(1, 10),
            'dusun' => $this->faker->word(),
        ];
    }
}
