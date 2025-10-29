@extends('layouts.app')

@section('content')
<!-- Header Section -->
<section class="blog-header py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">
                    <span data-lang="en">My Blog</span>
                    <span data-lang="id" style="display: none;">Blog Saya</span>
                </h1>
                <p class="lead">
                    <span data-lang="en">"I write about coding, data, and my journey as an Informatics student."</span>
                    <span data-lang="id" style="display: none;">"Saya menulis tentang coding, data, dan perjalanan saya sebagai mahasiswa Informatika."</span>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Blog Posts -->
<section class="blog-posts py-5">
    <div class="container">
        <div class="row g-4">

            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <article class="blog-card card-custom h-100">
                    <div class="blog-card-header" style="background-image: url('{{ $blog->image }}'); background-size: cover; background-position: center;">
                        <div class="overlay p-3 d-flex justify-content-between align-items-center" style="background: rgba(0,0,0,0.5); border-radius: 10px;">
                            <div class="blog-category text-white fw-bold">{{ $blog->category }}</div>
                            <div class="blog-date text-white">{{ \Carbon\Carbon::parse($blog->date)->format('M d, Y') }}</div>
                        </div>
                    </div>

                    <div class="blog-card-body">
                        <h3 class="blog-title">{{ $blog->title }}</h3>
                        <p class="blog-excerpt">{{ $blog->excerpt }}</p>
                        <div class="text-muted small">{{ $blog->read_time }}</div>
                    </div>

                    <div class="blog-card-footer">
                        <a href="{{ $blog->link ?? '#' }}" class="blog-read-more">
                            <span data-lang="en">Read More</span>
                            <span data-lang="id" style="display: none;">Baca Selengkapnya</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
            </div>
            @endforeach

            @if ($blogs->isEmpty())
            <div class="col-12 text-center">
                <p class="text-muted fs-5">No articles available yet.</p>
            </div>
            @endif

        </div>
    </div>
</section>
@endsection

@section('styles')
<style>
    .blog-header {
        background: linear-gradient(135deg, var(--purple-main) 0%, var(--pink) 100%);
        color: white;
        margin-top: 20px;
        border-radius: 0 0 30px 30px;
    }

    .blog-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
        overflow: hidden;
    }

    .blog-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 35px rgba(190, 151, 195, 0.25);
    }

    .blog-card-header {
        height: 180px;
        position: relative;
        border-radius: 8px 8px 0 0;
    }

    .blog-card-body {
        padding: 25px;
        background: white;
    }

    [data-bs-theme="dark"] .blog-card-body {
        background: #222;
    }

    .blog-title {
        color: var(--purple-dark);
        font-weight: 700;
        margin-bottom: 10px;
    }

    .blog-excerpt {
        color: #666;
        line-height: 1.6;
        margin-bottom: 10px;
    }

    [data-bs-theme="dark"] .blog-excerpt {
        color: #ccc;
    }

    .blog-card-footer {
        padding: 15px 25px;
        border-top: 1px solid #eee;
        background: #fafafa;
    }

    [data-bs-theme="dark"] .blog-card-footer {
        border-top: 1px solid #444;
        background: #111;
    }

    .blog-read-more {
        color: var(--purple-main);
        font-weight: 600;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: gap 0.3s ease;
    }

    .blog-read-more:hover {
        gap: 12px;
        color: var(--purple-dark);
    }
</style>
@endsection
