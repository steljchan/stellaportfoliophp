<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // Ambil semua project dengan relasi skills dan urutkan dari terbaru
        $projects = Project::with('skills')->orderBy('id', 'desc')->get();

        return view('projects.index', compact('projects'));
    }
}
