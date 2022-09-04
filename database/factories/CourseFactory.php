<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition()
    {
        return [
            'title' => fake()->title(),
            'slug' => fake()->title(),
            'teacher_id' => random_int(1,10),
            'start_at' => fake()->date('Y-m-d'),
            'description' => fake()->address(),
            'rate'=>random_int('0','100'),

        ];
    }
}
