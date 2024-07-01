<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subject' => fake()->jobTitle(),
            'teacherName' => fake()->name(),
            'age' => fake()->numberBetween(4, 12),
            'time' => fake()->numberBetween(2, 10),
            'capacity' => fake()->numberBetween(10, 15),
            'price' => fake()->numberBetween(500, 1500),
         ];
    }
}
