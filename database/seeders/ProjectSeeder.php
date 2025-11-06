<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::insert([
            [
                'title' => 'BajuKita',
                'description' => 'A Tkinter-based clothing management app...',
                'image' => '/images/projects/bajukita.jpg',
                'tech' => json_encode(['Python', 'Tkinter', 'SQLite']),
                'experience_id' => 1, // 🔗 terkait ke pengalaman pertama
            ],
            [
                'title' => 'DailyTaskManager',
                'description' => 'Java console-based task manager...',
                'image' => '/images/projects/taskmanager.jpg',
                'tech' => json_encode(['Java', 'OOP', 'File I/O']),
                'experience_id' => 1,
            ],
            [
                'title' => 'RuangKerja',
                'description' => 'A job search platform...',
                'image' => '/images/projects/ruangkerja.jpg',
                'tech' => json_encode(['Spring Boot', 'MySQL', 'Tailwind']),
                'experience_id' => 3,
            ],
            [
                'title' => 'PKM Semarak SuaraKu',
                'description' => 'An educational and reporting app...',
                'image' => '/images/projects/suaraku.jpg',
                'tech' => json_encode(['Flutter', 'Firebase', 'AI Integration']),
                'experience_id' => 2,
            ],
            [
                'title' => 'NuTrac',
                'description' => 'A nutrition tracking and monitoring app...',
                'image' => '/images/projects/nutrac.jpg',
                'tech' => json_encode(['Kotlin', 'SQLite', 'REST API']),
                'experience_id' => 5,
            ],
        ]);

    }
}
