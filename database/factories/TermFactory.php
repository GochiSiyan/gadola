<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TermFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph(rand(2, 5)),
        ];
    }

    public function taxonomies($count) {
        return $this->state(function (array $attr) use ($count) {
            return [
                'taxonomy_id' => rand(1, $count),
            ];
        });
    }
}
