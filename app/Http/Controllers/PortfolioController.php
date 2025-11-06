<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Blog;
use App\Models\Skill;


class PortfolioController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        $experiences = Experience::all();
        return view('about', compact('experiences'));
    }

    public function project()
    {
        $projects = Project::all();
        return view('project', compact('projects'));
    }

    public function blog()
    {
        $blogs = Blog::all();
        return view('blog', compact('blogs'));
    }
    public function skill()
    {
        // Ambil semua skill dari database
        $skills = Skill::orderBy('progress', 'desc')->get();

        return view('skill', compact('skills'));
    }

}
