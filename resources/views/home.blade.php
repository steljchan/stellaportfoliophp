@extends('layouts.app')

@section('title', 'Home | Stella Portfolio')

@section('content')
    {{-- Hero Section --}}
    <section class="hero-section d-flex align-items-center min-vh-100 text-center" id="home">
        <div class="container">
            <h1 class="fw-bold mb-3">Hi, I'm Stella 👋</h1>
            <p class="fs-5 mb-3">Informatics Student | AI Enthusiast | Creative Problem Solver</p>
            <p class="mb-4">
                Passionate about creating intelligent solutions that bridge technology and human needs 
                through AI, data science, and innovative design.
            </p>
            <a href="contact.blade.php" class="btn btn-purple-primary btn-lg me-3 mb-3">
                <i class="fas fa-paper-plane me-2"></i> Contact Me
            </a>
            <a href="projects.blade.php" class="btn btn-purple-secondary btn-lg mb-3">
                <i class="fas fa-rocket me-2"></i> View Projects
            </a>
        </div>
    </section>

    
    @endsection
