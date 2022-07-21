<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmployeeFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'address' => $this->faker->sentence(5),
            'status' => rand(0, 1),
            'department' => Str::random(5),
        ];
    }
}
