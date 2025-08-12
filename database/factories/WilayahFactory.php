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
        // Daftar nama dusun yang bisa Anda atur sendiri
        $daftarDusun = [
            'Permai Baru',
            'Tanjung Pauh Hilir',
            'Pondok Siguang',
            'Serumpun Pauh',
            'Tanjung Pauh Hulu',
            'Sungai Pagar',
            'Sungai Kunyit',
            'Sungai Pagar Baru',
        ];

        return [
            'rt' => $this->faker->numberBetween(1, 2), // RT hanya 1 atau 2
            'rw' => $this->faker->numberBetween(1, 10), // RW tetap 1-10
            'dusun' => $this->faker->randomElement($daftarDusun), // Pilih random dari daftar
        ];
    }
}
