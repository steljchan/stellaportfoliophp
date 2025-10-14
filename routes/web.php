<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/', function () {
    $skills = [
        ['name' => 'Python', 'icon' => '💻', 'level' => 85, 'description' => 'Data analysis, AI/ML, automation scripts'],
        ['name' => 'Java', 'icon' => '☕', 'level' => 80, 'description' => 'OOP, Spring Boot, desktop applications'],
        ['name' => 'C++', 'icon' => '⚡', 'level' => 70, 'description' => 'System programming, algorithms'],
        ['name' => 'SQL', 'icon' => '🗄️', 'level' => 75, 'description' => 'Database design, queries, optimization'],
        ['name' => 'Dart/Flutter', 'icon' => '📱', 'level' => 78, 'description' => 'Cross-platform mobile development'],
        ['name' => 'Laravel', 'icon' => '🌐', 'level' => 82, 'description' => 'Backend development, REST APIs']
    ];

    $projects = [
        [
            'title' => 'BajuKita',
            'description' => 'A Tkinter-based clothing management app that allows users to organize and visualize their wardrobe.',
            'image' => '/images/projects/bajukita.jpg',
            'tech' => ['Python', 'Tkinter', 'SQLite'],
            'link' => '/project#bajukita'
        ],
        [
            'title' => 'DailyTaskManager',
            'description' => 'Java console-based task manager with priorities, reminders, and deadline tracking.',
            'image' => '/images/projects/taskmanager.jpg',
            'tech' => ['Java', 'OOP', 'File I/O'],
            'link' => '/project#dailytaskmanager'
        ],
        [
            'title' => 'JobFinder',
            'description' => 'Job search platform connecting seekers and companies with advanced filtering.',
            'image' => '/images/projects/jobfinder.jpg',
            'tech' => ['Spring Boot', 'MySQL', 'Tailwind'],
            'link' => '/project#jobfinder'
        ]
    ];

    $blogs = [
        [
            'title' => 'How I Built My First AI App',
            'excerpt' => 'Learn how I created my first artificial intelligence application from scratch.',
            'image' => '/images/blog/ai-app.jpg',
            'category' => 'AI',
            'date' => 'Oct 2025',
            'read_time' => '5 min read',
            'link' => '/blog#ai-app'
        ],
        [
            'title' => 'Why Learn SQL Early as Developer',
            'excerpt' => 'The importance of SQL skills for every developer and how to master it.',
            'image' => '/images/blog/sql-guide.jpg',
            'category' => 'Database',
            'date' => 'Sep 2025',
            'read_time' => '4 min read',
            'link' => '/blog#sql-guide'
        ],
        [
            'title' => 'Flutter State Management Guide',
            'excerpt' => 'Comprehensive guide to managing state in Flutter applications effectively.',
            'image' => '/images/blog/flutter-state.jpg',
            'category' => 'Mobile',
            'date' => 'Aug 2025',
            'read_time' => '6 min read',
            'link' => '/blog#flutter-state'
        ]
    ];

    return view('home', compact('skills', 'projects', 'blogs'));
});