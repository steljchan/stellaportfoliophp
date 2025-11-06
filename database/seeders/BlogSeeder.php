<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        Blog::insert([
            [
                'title' => 'How I Built My First AI App',
                'excerpt' => 'Learn how I created my first AI app using Flutter and AI integration tools.',
                'image' => '/images/blog/ai-app.jpg',
                'category' => 'AI',
                'date' => '2025-10-15',
                'read_time' => '5 min read',
                'project_id' => 4, // PKM Semarak SuaraKu
            ],
            [
                'title' => 'Why Learn SQL Early as Developer',
                'excerpt' => 'Understanding databases early will make you a stronger backend developer.',
                'image' => '/images/blog/sql-guide.jpg',
                'category' => 'Database',
                'date' => '2025-09-12',
                'read_time' => '4 min read',
                'project_id' => 3, // RuangKerja
            ],
            [
                'title' => 'Flutter State Management Guide',
                'excerpt' => 'Comprehensive guide to choosing and implementing state management in Flutter.',
                'image' => '/images/blog/flutter-state.jpg',
                'category' => 'Mobile',
                'date' => '2025-08-22',
                'read_time' => '6 min read',
                'project_id' => 4, // PKM Semarak SuaraKu
            ],
            [
                'title' => 'Building RESTful APIs with Laravel',
                'excerpt' => 'Step-by-step process to build secure and scalable APIs using Laravel 11.',
                'image' => '/images/blog/laravel-api.jpg',
                'category' => 'Web Development',
                'date' => '2025-07-10',
                'read_time' => '7 min read',
                'project_id' => 3, // RuangKerja
            ],
            [
                'title' => 'Mastering Java OOP for Clean Code',
                'excerpt' => 'How to apply Object-Oriented Programming principles for maintainable Java code.',
                'image' => '/images/blog/java-oop.jpg',
                'category' => 'Programming',
                'date' => '2025-06-05',
                'read_time' => '8 min read',
                'project_id' => 2, // DailyTaskManager
            ],
            [
                'title' => 'Designing a Simple UI with Tkinter',
                'excerpt' => 'A beginner-friendly guide to building a wardrobe management app using Python Tkinter.',
                'image' => '/images/blog/tkinter-ui.jpg',
                'category' => 'Desktop App',
                'date' => '2025-05-25',
                'read_time' => '5 min read',
                'project_id' => 1, // BajuKita
            ],
        ]);
    }
}
