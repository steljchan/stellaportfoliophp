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
                'excerpt' => 'Learn how I created my first artificial intelligence application from scratch.',
                'image' => '/images/blog/ai-app.jpg',
                'category' => 'AI',
                'date' => '2025-10-15',
                'read_time' => '5 min read',
            ],
            [
                'title' => 'Why Learn SQL Early as Developer',
                'excerpt' => 'The importance of SQL skills for every developer and how to master it.',
                'image' => '/images/blog/sql-guide.jpg',
                'category' => 'Database',
                'date' => '2025-09-12',
                'read_time' => '4 min read',
            ],
            [
                'title' => 'Flutter State Management Guide',
                'excerpt' => 'Comprehensive guide to managing state in Flutter applications effectively.',
                'image' => '/images/blog/flutter-state.jpg',
                'category' => 'Mobile',
                'date' => '2025-08-22',
                'read_time' => '6 min read',
            ],
            [
                'title' => 'Building RESTful APIs with Laravel',
                'excerpt' => 'Step-by-step guide to building secure and scalable RESTful APIs using Laravel framework.',
                'image' => '/images/blog/laravel-api.jpg',
                'category' => 'Web Development',
                'date' => '2025-07-10',
                'read_time' => '7 min read',
            ],
            [
                'title' => 'Mastering Java OOP for Clean Code',
                'excerpt' => 'Best practices for writing clean, reusable, and efficient Java code using Object-Oriented Programming principles.',
                'image' => '/images/blog/java-oop.jpg',
                'category' => 'Programming',
                'date' => '2025-06-05',
                'read_time' => '8 min read',
            ],
        ]);
    }
}
