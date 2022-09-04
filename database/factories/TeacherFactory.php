<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition()
    {
        return [
            'name' => fake()->firstName(),
            'family' => fake()->lastName(),
            'mobile' => fake()->phoneNumber(),
            'email' => fake()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'password_verification' => 'password', // password
            'birthday' => fake()->date('Y-m-d'),
            'address' => fake()->address(),
            'type' => array_rand(['SUPERADMIN','ADMIN','USER']),
            'rate'=>random_int('0','100'),
            'job'=>fake()->jobTitle(),

        ];
    }
}
