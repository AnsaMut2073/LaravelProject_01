<?php

namespace Database\Factories;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Classroom>
 */
class ClassroomFactory extends Factory
{
    public function definition(): array
    {
        return [
            // Sesuai ajaran guru: pake unique() + randomElement
            'name' => fake()->unique()->randomElement([
                '12 PPLG 1', '11 PPLG 2', '10 PPLG 1', '12 PPLG 2',
                '12 DKV 1', '11 DKV 2', '10 DKV 1',
                '12 Animasi 1', '11 Animasi 2', '10 Animasi 1'
            ]),
            // Jurusan ngikutin nama kelasnya apa
            'major' => fake()->randomElement(['PPLG', 'DKV', 'Animasi']),
        ];
    }
}
