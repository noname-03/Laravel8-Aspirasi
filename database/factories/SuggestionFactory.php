<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SuggestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'no_hp' => $this->faker->phoneNumber,
            'suggestion' => $this->faker->text,
            'status' => $this->faker->randomElement(['0', '1']),
        ];
    }
}
