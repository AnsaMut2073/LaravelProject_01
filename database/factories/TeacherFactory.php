<?php

namespace Database\Factories;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Teacher>
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
            'name' => fake()->name(),
            // Perbaikan: Gunakan numerify untuk membuat 10 digit angka
            'nip' => fake()->numerify('##########'),
            'subject_id' => Subject::inRandomOrder()->first()->id ?? Subject::factory(),
            'start_date' => fake()->date(),
        ];
    }
}
