<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AspirationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dprd_id' => mt_rand(1, 3),
            'category_id' => mt_rand(1, 4),
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'description' => $this->faker->text,
            'street' => $this->faker->streetName,
            'rt' => $this->faker->randomNumber(2),
            'rw' => $this->faker->randomNumber(2),
            'districts' => $this->faker->city,
            'village' => $this->faker->city,
            'volume' => mt_rand(1, 1000),
            'unit' => $this->faker->randomElement(['meter', ' pak', 'kg']),
            'attachment' => $this->faker->imageUrl(640, 480, 'cats', true, 'Faker'),
            'status' => $this->faker->randomElement(['Terverifikasi', 'Proses Poker', 'Terealisasi
            ', 'Tidak Terealisasi']),
        ];
    }
}
