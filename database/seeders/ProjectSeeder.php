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
                'description' => 'A Tkinter-based clothing management app that allows users to organize and visualize their wardrobe.',
                'image' => '/images/projects/bajukita.jpg',
                'tech' => json_encode(['Python', 'Tkinter', 'SQLite']),
            ],
            [
                'title' => 'DailyTaskManager',
                'description' => 'Java console-based task manager with priorities, reminders, and deadline tracking.',
                'image' => '/images/projects/taskmanager.jpg',
                'tech' => json_encode(['Java', 'OOP', 'File I/O']),
            ],
            [
                'title' => 'RuangKerja',
                'description' => 'A job search platform connecting job seekers and companies, designed to simplify job discovery and recruitment with advanced filtering and chat features.',
                'image' => '/images/projects/ruangkerja.jpg',
                'tech' => json_encode(['Spring Boot', 'MySQL', 'Tailwind']),
            ],
            [
                'title' => 'PKM Semarak SuaraKu',
                'description' => 'An educational and reporting application developed under the PKM initiative to raise awareness about sexual harassment prevention among students in Makassar.',
                'image' => '/images/projects/suaraku.jpg',
                'tech' => json_encode(['Flutter', 'Firebase', 'AI Integration']),
            ],
            [
                'title' => 'NuTrac',
                'description' => 'A nutrition tracking and monitoring application that helps users record meal data, manage MBG tracking, and submit daily nutrition reports efficiently.',
                'image' => '/images/projects/nutrac.jpg',
                'tech' => json_encode(['Kotlin', 'SQLite', 'REST API']),
            ],
        ]);
    }
}
