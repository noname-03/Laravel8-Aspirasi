<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentAspirationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'aspiration_id' => $this->faker->numberBetween(1, 10),
            'name' => $this->faker->name,
            'title' => $this->faker->sentence,
            'description' => $this->faker->text,
            'status' => $this->faker->randomElement(['Terverifikasi', 'Belum Terverifikasi']),
        ];
    }
}
