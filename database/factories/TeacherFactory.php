<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'teacherName' => fake()->name(),
                'subject' => fake()->jobTitle(),
                'phone' => fake()->phoneNumber(),
                'email' => fake()->unique()->safeEmail(),
                'facebook' => fake()->url(),
                'Twitter' => fake()->url(),
                'Instagram' => fake()->url(),
                'image' => fake()->imageUrl(640, 480),
            ];
    }
}
