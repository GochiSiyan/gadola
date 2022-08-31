<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostMetaFactory extends Factory
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

    public function post($post_id) {
        return $this->state([
            'post_id' => $post_id,
        ]);
    }
}
