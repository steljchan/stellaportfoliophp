<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Skill;

class ProjectSkillSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil data Project dan Skill
        $bajukita = Project::where('title', 'BajuKita')->first();
        $taskManager = Project::where('title', 'DailyTaskManager')->first();
        $ruangKerja = Project::where('title', 'RuangKerja')->first();
        $suaraku = Project::where('title', 'PKM Semarak SuaraKu')->first();
        $nutrac = Project::where('title', 'NuTrac')->first();

        // Ambil Skill berdasarkan nama
        $python = Skill::where('name', 'Python')->first();
        $java = Skill::where('name', 'Java')->first();
        $sql = Skill::where('name', 'SQL')->first();
        $laravel = Skill::where('name', 'Laravel')->first();
        $bootstrap = Skill::where('name', 'Bootstrap')->first();

        // Kaitkan Project dengan Skill-nya
        $bajukita->skills()->attach([$python->id, $sql->id]);
        $taskManager->skills()->attach([$java->id]);
        $ruangKerja->skills()->attach([$laravel->id, $sql->id, $bootstrap->id]);
        $suaraku->skills()->attach([$python->id]);
        $nutrac->skills()->attach([$java->id, $sql->id]);
    }
}
