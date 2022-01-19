<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MobilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tahun_keluaran' => $this->faker->randomElement(['2009', '2012', '2016', '2019', '2022']),
            'warna' => $this->faker->firstName() . " " . $this->faker->colorName(),
            'harga' => $this->faker->numberBetween(5000000, 50000000),
            'mesin' => $this->faker->randomElement(['525cc', '1500cc']),
            'kapasitas_penumpang' => $this->faker->randomElement([2, 4, 7]),
            'tipe' => $this->faker->randomElement(['sedan', 'SUV', 'MPV']),
            'stock' => $this->faker->numberBetween(50, 500),
        ];
    }
}
