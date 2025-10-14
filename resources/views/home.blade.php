@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-section text-center py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-4">
                    <span data-lang="en">Hi, I'm Stella 👋</span>
                    <span data-lang="id" style="display: none;">Halo, Saya Stella 👋</span>
                </h1>
                <p class="lead mb-4">
                    <span data-lang="en">Informatics Student specializing in Artificial Intelligence and Data Science.</span>
                    <span data-lang="id" style="display: none;">Mahasiswa Informatika yang mengkhususkan diri dalam Kecerdasan Buatan dan Ilmu Data.</span>
                </p>
                <p class="mb-5">
                    <span data-lang="en">I love exploring data, building intelligent systems, and turning ideas into functional applications.</span>
                    <span data-lang="id" style="display: none;">Saya senang menjelajahi data, membangun sistem cerdas, dan mengubah ide menjadi aplikasi yang fungsional.</span>
                </p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="{{ url('/project') }}" class="btn btn-custom btn-lg">
                        <span data-lang="en">View My Projects</span>
                        <span data-lang="id" style="display: none;">Lihat Proyek Saya</span>
                    </a>
                    <a href="#" class="btn btn-outline-custom btn-lg">
                        <span data-lang="en">Download CV</span>
                        <span data-lang="id" style="display: none;">Unduh CV</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Preview -->
<section class="about-preview py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="section-header mb-4">
                    <span data-lang="en">About Me</span>
                    <span data-lang="id" style="display: none;">Tentang Saya</span>
                </h2>
                <p class="mb-4">
                    <span data-lang="en">I'm currently studying Informatics at Universitas Ciputra, focusing on AI and Data Science. I enjoy learning new technologies, collaborating on projects, and sharing my journey through writing.</span>
                    <span data-lang="id" style="display: none;">Saya saat ini sedang belajar Informatika di Universitas Ciputra, fokus pada AI dan Ilmu Data. Saya menikmati mempelajari teknologi baru, berkolaborasi dalam proyek, dan berbagi perjalanan saya melalui tulisan.</span>
                </p>
                <a href="{{ url('/about') }}" class="btn btn-custom">
                    <span data-lang="en">Learn More About Me →</span>
                    <span data-lang="id" style="display: none;">Pelajari Lebih Lanjut →</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Skills Preview -->
<section class="skills-preview py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-header">
                    <span data-lang="en">Skills & Technologies</span>
                    <span data-lang="id" style="display: none;">Keahlian & Teknologi</span>
                </h2>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-md-8">
                <div class="d-flex flex-wrap justify-content-center gap-4 mb-4">
                    <span class="skill-badge">💻 Python</span>
                    <span class="skill-badge">☕ Java</span>
                    <span class="skill-badge">🧠 TensorFlow</span>
                    <span class="skill-badge">🌐 Laravel</span>
                    <span class="skill-badge">🎨 Tailwind</span>
                </div>
                <a href="{{ url('/skills') }}" class="btn btn-outline-custom">
                    <span data-lang="en">See All Skills →</span>
                    <span data-lang="id" style="display: none;">Lihat Semua Keahlian →</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects -->
<section class="featured-projects py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-header">
                    <span data-lang="en">Featured Projects</span>
                    <span data-lang="id" style="display: none;">Proyek Unggulan</span>
                </h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card card-custom h-100">
                    <div class="card-header-custom">
                        <h5 class="mb-0">BajuKita</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <span data-lang="en">A Tkinter-based clothing management app.</span>
                            <span data-lang="id" style="display: none;">Aplikasi manajemen pakaian berbasis Tkinter.</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom h-100">
                    <div class="card-header-custom">
                        <h5 class="mb-0">DailyTaskManager</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <span data-lang="en">A Java task manager with priority and reminders.</span>
                            <span data-lang="id" style="display: none;">Manajer tugas Java dengan prioritas dan pengingat.</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom h-100">
                    <div class="card-header-custom">
                        <h5 class="mb-0">JobFinder</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <span data-lang="en">A job search platform built with Spring Boot and MySQL.</span>
                            <span data-lang="id" style="display: none;">Platform pencarian kerja dibangun dengan Spring Boot dan MySQL.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 text-center">
                <a href="{{ url('/project') }}" class="btn btn-custom">
                    <span data-lang="en">See More Projects →</span>
                    <span data-lang="id" style="display: none;">Lihat Proyek Lainnya →</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Blog Preview -->
<section class="blog-preview py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-header">
                    <span data-lang="en">Latest from Blog</span>
                    <span data-lang="id" style="display: none;">Terbaru dari Blog</span>
                </h2>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-5">
                <div class="card card-custom h-100">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span data-lang="en">How I Built My First AI App</span>
                            <span data-lang="id" style="display: none;">Bagaimana Saya Membangun Aplikasi AI Pertama</span>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card card-custom h-100">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span data-lang="en">Why You Should Learn SQL Early as a Developer</span>
                            <span data-lang="id" style="display: none;">Mengapa Anda Harus Belajar SQL Sejak Dini sebagai Developer</span>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 text-center">
                <a href="{{ url('/blog') }}" class="btn btn-outline-custom">
                    <span data-lang="en">Read My Blog →</span>
                    <span data-lang="id" style="display: none;">Baca Blog Saya →</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    // Language switching functionality
    document.addEventListener('DOMContentLoaded', function() {
        const currentLang = localStorage.getItem('language') || 'en';
        const elements = document.querySelectorAll('[data-lang]');
        
        elements.forEach(element => {
            if (element.getAttribute('data-lang') === currentLang) {
                element.style.display = 'inline';
            } else {
                element.style.display = 'none';
            }
        });
    });
</script>
@endsection