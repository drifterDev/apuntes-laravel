<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'city_id' => rand(1, 10),
            'company_id' => rand(1, 10),
            'user_id' => rand(1, 10),
            'name' => $this->faker->company(),
            'execution_date' => $this->faker->date(),
            'is_active' => rand(0, 1)
        ];
    }
}
