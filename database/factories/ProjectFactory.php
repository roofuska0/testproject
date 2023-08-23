<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class ProjectFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->text(50),
            'status' => $this->faker->randomKey(config('statuses.project_status')),
        ];
    }
}
