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
            <!-- Article 1 -->
            <div class="col-lg-4 col-md-6">
                <article class="blog-card card-custom">
                    <div class="blog-card-header">
                        <div class="blog-category">Data Science</div>
                        <div class="blog-date">October 2025</div>
                    </div>
                    <div class="blog-card-body">
                        <h3 class="blog-title">
                            <span data-lang="en">Why Data Science is the Heart of AI</span>
                            <span data-lang="id" style="display: none;">Mengapa Data Science adalah Jantung AI</span>
                        </h3>
                        <p class="blog-excerpt">
                            <span data-lang="en">"Understanding how data influences AI systems and how to start learning it."</span>
                            <span data-lang="id" style="display: none;">"Memahami bagaimana data mempengaruhi sistem AI dan cara memulai mempelajarinya."</span>
                        </p>
                        <div class="blog-tags">
                            <span class="blog-tag">AI</span>
                            <span class="blog-tag">Data Science</span>
                            <span class="blog-tag">Machine Learning</span>
                        </div>
                    </div>
                    <div class="blog-card-footer">
                        <a href="#" class="blog-read-more">
                            <span data-lang="en">Read More</span>
                            <span data-lang="id" style="display: none;">Baca Selengkapnya</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
            </div>

            <!-- Article 2 -->
            <div class="col-lg-4 col-md-6">
                <article class="blog-card card-custom">
                    <div class="blog-card-header">
                        <div class="blog-category">Mobile Development</div>
                        <div class="blog-date">September 2025</div>
                    </div>
                    <div class="blog-card-body">
                        <h3 class="blog-title">
                            <span data-lang="en">Managing State in Flutter: A Beginner's Guide</span>
                            <span data-lang="id" style="display: none;">Mengelola State di Flutter: Panduan Pemula</span>
                        </h3>
                        <p class="blog-excerpt">
                            <span data-lang="en">"How I learned to manage complex UI states with BLoC architecture."</span>
                            <span data-lang="id" style="display: none;">"Bagaimana saya belajar mengelola state UI yang kompleks dengan arsitektur BLoC."</span>
                        </p>
                        <div class="blog-tags">
                            <span class="blog-tag">Flutter</span>
                            <span class="blog-tag">Dart</span>
                            <span class="blog-tag">BLoC</span>
                        </div>
                    </div>
                    <div class="blog-card-footer">
                        <a href="#" class="blog-read-more">
                            <span data-lang="en">Read More</span>
                            <span data-lang="id" style="display: none;">Baca Selengkapnya</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
            </div>

            <!-- Article 3 -->
            <div class="col-lg-4 col-md-6">
                <article class="blog-card card-custom">
                    <div class="blog-card-header">
                        <div class="blog-category">Database</div>
                        <div class="blog-date">August 2025</div>
                    </div>
                    <div class="blog-card-body">
                        <h3 class="blog-title">
                            <span data-lang="en">Learning SQL Effectively</span>
                            <span data-lang="id" style="display: none;">Belajar SQL dengan Efektif</span>
                        </h3>
                        <p class="blog-excerpt">
                            <span data-lang="en">"A personal roadmap for mastering SQL as a beginner in data science."</span>
                            <span data-lang="id" style="display: none;">"Roadmap pribadi untuk menguasai SQL sebagai pemula dalam data science."</span>
                        </p>
                        <div class="blog-tags">
                            <span class="blog-tag">SQL</span>
                            <span class="blog-tag">Database</span>
                            <span class="blog-tag">Learning</span>
                        </div>
                    </div>
                    <div class="blog-card-footer">
                        <a href="#" class="blog-read-more">
                            <span data-lang="en">Read More</span>
                            <span data-lang="id" style="display: none;">Baca Selengkapnya</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
            </div>

            <!-- Coming Soon Articles -->
            <div class="col-12 text-center mt-5">
                <div class="coming-soon-card card-custom p-5">
                    <div class="coming-soon-icon mb-3">
                        <i class="fas fa-feather"></i>
                    </div>
                    <h3 class="mb-3">
                        <span data-lang="en">More Articles Coming Soon!</span>
                        <span data-lang="id" style="display: none;">Artikel Lainnya Segera Hadir!</span>
                    </h3>
                    <p class="text-muted">
                        <span data-lang="en">I'm constantly learning and sharing my journey. Stay tuned for more insights!</span>
                        <span data-lang="id" style="display: none;">Saya terus belajar dan berbagi perjalanan saya. Nantikan wawasan lebih banyak!</span>
                    </p>
                </div>
            </div>
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

    /* Blog Cards */
    .blog-card {
        height: 100%;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
    }

    .blog-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 35px rgba(190, 151, 195, 0.25);
    }

    .blog-card-header {
        background: linear-gradient(135deg, var(--purple-light), var(--pink));
        padding: 20px;
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .blog-category {
        background: rgba(255, 255, 255, 0.2);
        padding: 5px 15px;
        border-radius: 15px;
        font-size: 0.8rem;
        font-weight: 600;
    }

    .blog-date {
        font-size: 0.8rem;
        opacity: 0.9;
    }

    .blog-card-body {
        padding: 25px;
    }

    .blog-title {
        color: var(--purple-dark);
        margin-bottom: 15px;
        font-weight: 700;
        line-height: 1.4;
    }

    .blog-excerpt {
        color: #666;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    [data-bs-theme="dark"] .blog-excerpt {
        color: #ccc;
    }

    .blog-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .blog-tag {
        background: var(--purple-light);
        color: var(--purple-dark);
        padding: 4px 12px;
        border-radius: 12px;
        font-size: 0.75rem;
        font-weight: 500;
    }

    .blog-card-footer {
        padding: 20px 25px;
        border-top: 1px solid #eee;
    }

    [data-bs-theme="dark"] .blog-card-footer {
        border-top: 1px solid #444;
    }

    .blog-read-more {
        color: var(--purple-main);
        text-decoration: none;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: gap 0.3s ease;
    }

    .blog-read-more:hover {
        gap: 12px;
        color: var(--purple-dark);
    }

    /* Coming Soon */
    .coming-soon-card {
        text-align: center;
        background: linear-gradient(135deg, var(--cream) 0%, var(--purple-light) 100%);
    }

    .coming-soon-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, var(--purple-main), var(--pink));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        color: white;
        font-size: 2rem;
    }
</style>
@endsection