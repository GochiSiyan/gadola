<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommerceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['purchase', 'invoice']),
        ];
    }
    
    public function user($user) {
        return $this->state([
            'user_id' => rand(1, $user),
        ]);
    }
}
