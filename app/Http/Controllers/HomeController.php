<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $experiences = Experience::with('projects.blogs')->get();
        return view('about.blade.php', compact('experiences'));
    }
}
