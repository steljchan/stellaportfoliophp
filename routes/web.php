<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/project', [PortfolioController::class, 'project'])->name('project');
Route::get('/blog', [PortfolioController::class, 'blog'])->name('blog');
Route::view('/contact', 'contact')->name('contact');
