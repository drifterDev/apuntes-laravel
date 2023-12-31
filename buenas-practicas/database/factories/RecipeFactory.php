<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\User;

class RecipeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'title' => $this->faker->sentence(),
            'description' => $this->faker->text(),
            'ingredients' => $this->faker->text(),
            'instructions' => $this->faker->text(),
            'image' => $this->faker->imageUrl(640, 480),
        ];
    }
}
