<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommerceMetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'key' => $this->faker->word,
            'value' => $this->faker->word,
        ];
    }

    public function commerce($commerce_id) {
        return $this->state([
            'commerce_id' => $commerce_id,
        ]);
    }
}
