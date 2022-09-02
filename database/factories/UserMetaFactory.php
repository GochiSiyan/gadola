<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserMetaFactory extends Factory
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

    public function user($user_id)
    {
        return [
            'user_id' => $user_id,
        ];
    }
}
