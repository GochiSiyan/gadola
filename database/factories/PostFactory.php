<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(rand(3, 10)),
            'status' => $this->faker->randomElement(['draft', 'published']),
            'slug' => $this->faker->unique()->slug,
        ];
    }
}
