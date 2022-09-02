<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommerceDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quantity' => $this->faker->numberBetween(1, 10),
        ];
    }

    public function commerce($commerce) {
        return $this->state([
            'commerce_id' => $commerce,
        ]);
    }

    public function product($post) {
        return $this->state([
            'post_id' => $post,
        ]);
    }
}
