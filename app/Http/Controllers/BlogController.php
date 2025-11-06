<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Ambil semua blog dari database
        $blogs = Blog::all();

        // Kirim ke view
        return view('blog', compact('blogs'));
    }
}
