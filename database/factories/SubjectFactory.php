<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $subjects = [
            'Matematika',
            'Bahasa Indonesia',
            'Bahasa Inggris',
            'IPA',
            'IPS',
            'Informatika',
            'Pemrograman Web',
            'Basis Data',
            'Desain Grafis',
            'PKN',
        ];

        return [
            'name' => fake()->unique()->randomElement($subjects),
        ];
    }
}
