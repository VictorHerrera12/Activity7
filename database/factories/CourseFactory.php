<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition()
    {
        return [
            'course_key' => 'ROB' . $this->faker->unique()->numberBetween(100, 999),
            'title' => $this->faker->sentence(3),
            'cover' => null,
            'content' => $this->faker->paragraph(),
            'material' => $this->faker->sentence(),
            'robotics_kit' => $this->faker->randomElement([
                'StarterKit',
                'Educational Robotics Kit',
                'Kit5'
            ])
        ];
    }
}
