<?php

namespace Database\Seeders;

use App\Models\Student; // import model Student
use App\Models\Classroom;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Student::factory(15)->create(); // membuat 15 data students baru
        // Classroom::factory(10)->create();

        Classroom::factory(10)
            ->hasStudents(10) // setiap classroom memiliki 10 students
            ->create();
    }
}
