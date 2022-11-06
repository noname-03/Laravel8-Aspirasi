<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentSuggestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'suggestion_id' => $this->faker->numberBetween(1, 20),
            'name' => $this->faker->name,
            'title' => $this->faker->sentence,
            'description' => $this->faker->text,
            'status' => $this->faker->randomElement(['0', '1']),
        ];
    }
}
