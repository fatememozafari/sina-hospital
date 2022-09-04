<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Document>
 */
class DocumentFactory extends Factory
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
            'teacher_id' => random_int(0,10),
            'file' => Str::random(10),
            'description' => fake()->address(),
            'rate'=>random_int('0','100'),
        ];
    }
}
