<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class MotorFactory extends Factory
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
            'mesin' => $this->faker->randomElement(['125cc', '150cc']),
            'tipe_suspensi' => $this->faker->randomElement(['Telescopic Fork', 'Telescopic Up Side Down', 'Swing Arm Rear Suspension']),
            'tipe_transmisi' => $this->faker->randomElement(['matic', 'manual']),
            'stock' => $this->faker->numberBetween(50, 500),
        ];
    }
}
