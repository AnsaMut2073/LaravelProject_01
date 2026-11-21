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
        $classes = [
            ['name' => '12 PPLG 1', 'major' => 'PPLG'],
            ['name' => '11 PPLG 1', 'major' => 'PPLG'],
            ['name' => '10 PPLG 1', 'major' => 'PPLG'],
            ['name' => '12 PPLG 2', 'major' => 'PPLG'],
            ['name' => '11 PPLG 2', 'major' => 'PPLG'],
            ['name' => '12 DKV 1', 'major' => 'DKV'],
            ['name' => '11 DKV 1', 'major' => 'DKV'],
            ['name' => '10 DKV 1', 'major' => 'DKV'],
            ['name' => '11 DKV 2', 'major' => 'DKV'],
            ['name' => '12 Animasi 1', 'major' => 'Animasi'],
            ['name' => '11 Animasi 1', 'major' => 'Animasi'],
            ['name' => '10 Animasi 1', 'major' => 'Animasi'],
        ];

        return fake()->unique()->randomElement($classes);
    }
}
