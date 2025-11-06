<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        Skill::truncate(); // hapus data lama biar gak dobel

        Skill::insert([
            [
                'name' => 'Python',
                'category' => 'Programming Language',
                'level' => 'Advanced',
                'icon' => 'fab fa-python',
                'progress' => 85,
            ],
            [
                'name' => 'Java',
                'category' => 'Programming Language',
                'level' => 'Advanced',
                'icon' => 'fab fa-java',
                'progress' => 80,
            ],
            [
                'name' => 'C++',
                'category' => 'Programming Language',
                'level' => 'Intermediate',
                'icon' => 'fas fa-code',
                'progress' => 70,
            ],
            [
                'name' => 'SQL',
                'category' => 'Programming Language',
                'level' => 'Intermediate',
                'icon' => 'fas fa-database',
                'progress' => 75,
            ],
            [
                'name' => 'Laravel',
                'category' => 'Framework',
                'level' => 'Advanced',
                'icon' => 'fab fa-laravel',
                'progress' => 90,
            ],
            [
                'name' => 'Bootstrap',
                'category' => 'Framework',
                'level' => 'Intermediate',
                'icon' => 'fab fa-bootstrap',
                'progress' => 80,
            ],
            [
                'name' => 'GitHub',
                'category' => 'Tool',
                'level' => 'Proficient',
                'icon' => 'fab fa-github',
                'progress' => 80,
            ],
            [
                'name' => 'VS Code',
                'category' => 'Tool',
                'level' => 'Proficient',
                'icon' => 'fas fa-code',
                'progress' => 85,
            ],
        ]);
    }
}
