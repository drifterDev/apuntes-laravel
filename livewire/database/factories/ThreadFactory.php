<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;

class ThreadFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => rand(1, 10),
            'title' => fake()->sentence(),
            'body' => fake()->text(),
        ];
    }
}
