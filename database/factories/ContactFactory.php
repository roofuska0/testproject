<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => fake()->word(),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
