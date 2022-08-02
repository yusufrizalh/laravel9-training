<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmployeeFactory extends Factory
{
    public function definition()
    {
        return [
            'department_id' => rand(1, 4),
            'name' => fake()->name(),
            'address' => $this->faker->sentence(5),
            'status' => rand(0, 1),
        ];
    }
}
