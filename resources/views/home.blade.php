@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-section text-center py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="hero-content">
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
                        <a href="{{ url('/project') }}" class="btn btn-purple-primary btn-lg">
                            <i class="fas fa-rocket me-2"></i>
                            <span data-lang="en">View Portfolio</span>
                            <span data-lang="id" style="display: none;">Lihat Portofolio</span>
                        </a>
                        <a href="#" class="btn btn-purple-secondary btn-lg">
                            <i class="fas fa-download me-2"></i>
                            <span data-lang="en">Download CV</span>
                            <span data-lang="id" style="display: none;">Unduh CV</span>
                        </a>
                        <a href="{{ url('/about') }}" class="btn btn-purple-outline btn-lg">
                            <i class="fas fa-user me-2"></i>
                            <span data-lang="en">Learn More</span>
                            <span data-lang="id" style="display: none;">Pelajari Lebih</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Preview -->
<section class="about-preview py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="about-visual">
                    <div class="visual-card card-purple">
                        <i class="fas fa-brain"></i>
                        <h4>AI & Data Science</h4>
                        <p>Specialization</p>
                    </div>
                    <div class="visual-card card-purple">
                        <i class="fas fa-code"></i>
                        <h4>Full Stack Dev</h4>
                        <p>Web & Mobile</p>
                    </div>
                    <div class="visual-card card-purple">
                        <i class="fas fa-paint-brush"></i>
                        <h4>UI/UX Design</h4>
                        <p>Creative Solutions</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <h2 class="section-header-purple mb-4 text-start">
                        <span data-lang="en">About Me</span>
                        <span data-lang="id" style="display: none;">Tentang Saya</span>
                    </h2>
                    <p class="mb-4">
                        <span data-lang="en">Passionate Informatics student with expertise in AI, Data Science, and full-stack development. I create innovative solutions that blend technology with creativity to solve real-world problems.</span>
                        <span data-lang="id" style="display: none;">Mahasiswa Informatika yang bersemangat dengan keahlian dalam AI, Ilmu Data, dan pengembangan full-stack. Saya menciptakan solusi inovatif yang memadukan teknologi dengan kreativitas untuk memecahkan masalah dunia nyata.</span>
                    </p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="{{ url('/about') }}" class="btn btn-purple-primary">
                            <i class="fas fa-star me-2"></i>
                            <span data-lang="en">My Journey</span>
                            <span data-lang="id" style="display: none;">Perjalanan Saya</span>
                        </a>
                        <a href="{{ url('/contact') }}" class="btn btn-purple-outline">
                            <i class="fas fa-handshake me-2"></i>
                            <span data-lang="en">Let's Talk</span>
                            <span data-lang="id" style="display: none;">Mari Bicara</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Preview -->
<section class="skills-preview py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-header-purple">
                    <span data-lang="en">Skills & Technologies</span>
                    <span data-lang="id" style="display: none;">Keahlian & Teknologi</span>
                </h2>
                <p class="lead">
                    <span data-lang="en">Technologies I work with</span>
                    <span data-lang="id" style="display: none;">Teknologi yang saya gunakan</span>
                </p>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($skills as $skill)
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="skill-card card-purple text-center skill-tooltip" data-skill="{{ $skill['name'] }}" data-description="{{ $skill['description'] }}">
                    <div class="skill-icon">
                        {!! $skill['icon'] !!}
                    </div>
                    <h5>{{ $skill['name'] }}</h5>
                    <div class="skill-level">
                        <div class="level-bar">
                            <div class="level-progress" data-level="{{ $skill['level'] }}"></div>
                        </div>
                        <span class="level-text">{{ $skill['level'] }}%</span>
                    </div>
                    <div class="skill-tooltip-text">
                        {{ $skill['description'] }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="{{ url('/skills') }}" class="btn btn-purple-primary btn-lg">
                    <i class="fas fa-chart-bar me-2"></i>
                    <span data-lang="en">View All Skills</span>
                    <span data-lang="id" style="display: none;">Lihat Semua Keahlian</span>
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
                <h2 class="section-header-purple">
                    <span data-lang="en">Featured Projects</span>
                    <span data-lang="id" style="display: none;">Proyek Unggulan</span>
                </h2>
                <p class="lead">
                    <span data-lang="en">Some of my recent work</span>
                    <span data-lang="id" style="display: none;">Beberapa karya terbaru saya</span>
                </p>
            </div>
        </div>
        <div class="row g-4">
            @foreach($projects as $project)
            <div class="col-lg-4 col-md-6">
                <div class="project-card card-purple" onclick="window.location.href='{{ $project['link'] }}'" style="cursor: pointer;">
                    <div class="project-image">
                        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}">
                        <div class="project-overlay">
                            <div class="project-actions">
                                <button class="btn-action">
                                    <i class="fas fa-external-link-alt"></i>
                                </button>
                                <button class="btn-action">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>
                        <div class="project-badge">
                            <i class="fas fa-trophy"></i>
                            Featured
                        </div>
                    </div>
                    <div class="project-content">
                        <h4 class="project-title">{{ $project['title'] }}</h4>
                        <p class="project-description">
                            {{ $project['description'] }}
                        </p>
                        <div class="project-tech">
                            @foreach($project['tech'] as $tech)
                            <span class="tech-tag">{{ $tech }}</span>
                            @endforeach
                        </div>
                        <div class="project-footer">
                            <a href="{{ $project['link'] }}" class="btn-view-project">
                                <span data-lang="en">View Project</span>
                                <span data-lang="id" style="display: none;">Lihat Proyek</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="{{ url('/project') }}" class="btn btn-purple-primary btn-lg">
                    <i class="fas fa-folder-open me-2"></i>
                    <span data-lang="en">View All Projects</span>
                    <span data-lang="id" style="display: none;">Lihat Semua Proyek</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Blog Preview -->
<section class="blog-preview py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-header-purple">
                    <span data-lang="en">Latest from Blog</span>
                    <span data-lang="id" style="display: none;">Terbaru dari Blog</span>
                </h2>
                <p class="lead">
                    <span data-lang="en">Thoughts and tutorials</span>
                    <span data-lang="id" style="display: none;">Pemikiran dan tutorial</span>
                </p>
            </div>
        </div>
        <div class="row g-4">
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <div class="blog-card card-purple" onclick="window.location.href='{{ $blog['link'] }}'" style="cursor: pointer;">
                    <div class="blog-image">
                        <img src="{{ $blog['image'] }}" alt="{{ $blog['title'] }}">
                        <div class="blog-category">{{ $blog['category'] }}</div>
                        <div class="blog-gradient"></div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-date">{{ $blog['date'] }}</span>
                            <span class="blog-read-time">{{ $blog['read_time'] }}</span>
                        </div>
                        <h4 class="blog-title">{{ $blog['title'] }}</h4>
                        <p class="blog-excerpt">{{ $blog['excerpt'] }}</p>
                        <div class="blog-footer">
                            <a href="{{ $blog['link'] }}" class="btn-read-more">
                                <span data-lang="en">Read More</span>
                                <span data-lang="id" style="display: none;">Baca Selengkapnya</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="{{ url('/blog') }}" class="btn btn-purple-primary btn-lg">
                    <i class="fas fa-newspaper me-2"></i>
                    <span data-lang="en">Read All Articles</span>
                    <span data-lang="id" style="display: none;">Baca Semua Artikel</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <div class="cta-content">
                    <h2 class="mb-4">
                        <span data-lang="en">Ready to work together?</span>
                        <span data-lang="id" style="display: none;">Siap bekerja sama?</span>
                    </h2>
                    <p class="mb-5">
                        <span data-lang="en">Let's turn your ideas into reality. I'm always open to discussing new projects and opportunities.</span>
                        <span data-lang="id" style="display: none;">Mari wujudkan ide Anda menjadi kenyataan. Saya selalu terbuka untuk mendiskusikan proyek dan peluang baru.</span>
                    </p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="{{ url('/contact') }}" class="btn btn-purple-primary btn-lg">
                            <i class="fas fa-paper-plane me-2"></i>
                            <span data-lang="en">Get In Touch</span>
                            <span data-lang="id" style="display: none;">Hubungi Saya</span>
                        </a>
                        <a href="{{ url('/project') }}" class="btn btn-purple-secondary btn-lg">
                            <i class="fas fa-eye me-2"></i>
                            <span data-lang="en">View Portfolio</span>
                            <span data-lang="id" style="display: none;">Lihat Portofolio</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<style>
    :root {
        --purple-primary: #be97c3;
        --purple-secondary: #e2cbe2;
        --purple-dark: #8b6b90;
        --purple-light: #f5e6f8;
        --purple-gradient: linear-gradient(135deg, #be97c3 0%, #e2cbe2 100%);
        --purple-gradient-dark: linear-gradient(135deg, #8b6b90 0%, #be97c3 100%);
    }

    /* Hero Section */
    .hero-section {
        background: var(--purple-gradient);
        color: white;
        margin-top: 20px;
        border-radius: 0 0 30px 30px;
    }

    .hero-content {
        padding: 60px 0;
    }

    /* Purple Buttons */
    .btn-purple-primary {
        background: var(--purple-gradient);
        border: none;
        color: white;
        padding: 12px 30px;
        border-radius: 25px;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(190, 151, 195, 0.4);
        position: relative;
        overflow: hidden;
    }

    .btn-purple-primary::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s;
    }

    .btn-purple-primary:hover::before {
        left: 100%;
    }

    .btn-purple-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(190, 151, 195, 0.6);
        color: white;
    }

    .btn-purple-secondary {
        background: rgba(255, 255, 255, 0.15);
        border: 2px solid rgba(255, 255, 255, 0.3);
        color: white;
        padding: 12px 30px;
        border-radius: 25px;
        font-weight: 600;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .btn-purple-secondary:hover {
        background: rgba(255, 255, 255, 0.25);
        border-color: rgba(255, 255, 255, 0.5);
        color: white;
        transform: translateY(-3px);
    }

    .btn-purple-outline {
        background: transparent;
        border: 2px solid var(--purple-primary);
        color: var(--purple-primary);
        padding: 12px 30px;
        border-radius: 25px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-purple-outline:hover {
        background: var(--purple-primary);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 4px 15px rgba(190, 151, 195, 0.3);
    }

    /* Purple Cards */
    .card-purple {
        background: white;
        border-radius: 20px;
        border: none;
        box-shadow: 0 8px 30px rgba(190, 151, 195, 0.15);
        transition: all 0.3s ease;
        overflow: hidden;
        position: relative;
    }

    .card-purple::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: var(--purple-gradient);
    }

    .card-purple:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(190, 151, 195, 0.25);
    }

    /* About Preview */
    .about-preview {
        background: var(--purple-light);
    }

    .about-visual {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        position: relative;
    }

    .visual-card {
        padding: 30px 20px;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .visual-card:hover {
        transform: translateY(-10px);
    }

    .visual-card i {
        font-size: 2.5rem;
        color: var(--purple-primary);
        margin-bottom: 15px;
    }

    .visual-card h4 {
        color: var(--purple-dark);
        margin-bottom: 10px;
    }

    .visual-card p {
        color: #666;
        margin: 0;
    }

    /* Skills Preview */
    .skills-preview {
        background: var(--purple-gradient);
        color: white;
    }

    .skill-card {
        padding: 30px 20px;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: all 0.3s ease;
        cursor: pointer;
        position: relative;
    }

    .skill-card:hover {
        transform: translateY(-10px);
        background: rgba(255, 255, 255, 0.15);
        border-color: rgba(255, 255, 255, 0.3);
    }

    .skill-icon {
        font-size: 2.5rem;
        margin-bottom: 15px;
    }

    .skill-card h5 {
        color: white;
        margin-bottom: 15px;
    }

    .level-bar {
        width: 100%;
        height: 6px;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 10px;
        overflow: hidden;
        margin-bottom: 8px;
    }

    .level-progress {
        height: 100%;
        background: white;
        border-radius: 10px;
        width: 0;
        transition: width 1.5s ease-in-out;
    }

    .level-text {
        font-size: 0.8rem;
        opacity: 0.8;
    }

    /* Skill Tooltip */
    .skill-tooltip {
        position: relative;
    }

    .skill-tooltip-text {
        position: absolute;
        bottom: 100%;
        left: 50%;
        transform: translateX(-50%);
        background: var(--purple-dark);
        color: white;
        padding: 10px 15px;
        border-radius: 10px;
        font-size: 0.8rem;
        white-space: nowrap;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        margin-bottom: 10px;
        z-index: 1000;
    }

    .skill-tooltip-text::after {
        content: '';
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        border: 5px solid transparent;
        border-top-color: var(--purple-dark);
    }

    .skill-tooltip:hover .skill-tooltip-text {
        opacity: 1;
        visibility: visible;
    }

    /* Projects & Blog Sections */
    .featured-projects, .blog-preview {
        background: var(--purple-light);
    }

    /* Project Cards */
    .project-image {
        position: relative;
        height: 200px;
        overflow: hidden;
    }

    .project-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .project-card:hover .project-image img {
        transform: scale(1.1);
    }

    .project-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(190, 151, 195, 0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .project-card:hover .project-overlay {
        opacity: 1;
    }

    .project-actions {
        display: flex;
        gap: 10px;
    }

    .btn-action {
        width: 45px;
        height: 45px;
        background: white;
        border: none;
        border-radius: 50%;
        color: var(--purple-primary);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .btn-action:hover {
        background: var(--purple-dark);
        color: white;
        transform: scale(1.1);
    }

    .project-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        background: var(--purple-gradient);
        color: white;
        padding: 5px 12px;
        border-radius: 15px;
        font-size: 0.7rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .project-content {
        padding: 25px;
    }

    .project-title {
        color: var(--purple-dark);
        margin-bottom: 15px;
    }

    .project-description {
        color: #666;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    .project-tech {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 20px;
    }

    .tech-tag {
        background: var(--purple-light);
        color: var(--purple-dark);
        padding: 5px 12px;
        border-radius: 15px;
        font-size: 0.8rem;
        font-weight: 500;
    }

    .btn-view-project {
        color: var(--purple-primary);
        text-decoration: none;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: gap 0.3s ease;
    }

    .btn-view-project:hover {
        gap: 12px;
        color: var(--purple-dark);
    }

    /* Blog Cards */
    .blog-image {
        position: relative;
        height: 200px;
        overflow: hidden;
    }

    .blog-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .blog-gradient {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 60%;
        background: linear-gradient(transparent, var(--purple-primary));
        opacity: 0.3;
        transition: opacity 0.3s ease;
    }

    .blog-card:hover .blog-gradient {
        opacity: 0.6;
    }

    .blog-category {
        position: absolute;
        top: 15px;
        left: 15px;
        background: var(--purple-gradient);
        color: white;
        padding: 5px 15px;
        border-radius: 15px;
        font-size: 0.8rem;
        font-weight: 600;
        z-index: 2;
    }

    .blog-content {
        padding: 25px;
    }

    .blog-meta {
        display: flex;
        justify-content: between;
        gap: 15px;
        margin-bottom: 15px;
        font-size: 0.8rem;
        color: #999;
    }

    .blog-title {
        color: var(--purple-dark);
        margin-bottom: 15px;
        line-height: 1.4;
    }

    .blog-excerpt {
        color: #666;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    .btn-read-more {
        color: var(--purple-primary);
        text-decoration: none;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: gap 0.3s ease;
    }

    .btn-read-more:hover {
        gap: 12px;
        color: var(--purple-dark);
    }

    /* CTA Section */
    .cta-section {
        background: var(--purple-gradient-dark);
        color: white;
        border-radius: 30px 30px 0 0;
    }

    .cta-content {
        padding: 60px 0;
    }

    /* Section Headers */
    .section-header-purple {
        text-align: center;
        margin-bottom: 40px;
        position: relative;
    }

    .section-header-purple h2 {
        font-family: "Quicksand", sans-serif;
        font-weight: 700;
        color: var(--purple-dark);
        display: inline-block;
        padding-bottom: 10px;
        position: relative;
    }

    .section-header-purple h2::after {
        content: '';
        position: absolute;
        width: 70%;
        height: 3px;
        background: var(--purple-gradient);
        bottom: 0;
        left: 15%;
    }

    .skills-preview .section-header-purple h2,
    .cta-section .section-header-purple h2 {
        color: white;
    }

    .skills-preview .section-header-purple h2::after,
    .cta-section .section-header-purple h2::after {
        background: rgba(255, 255, 255, 0.5);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .about-visual {
            grid-template-columns: 1fr;
            margin-bottom: 30px;
        }
        
        .hero-content {
            padding: 40px 0;
        }
        
        .btn-purple-primary,
        .btn-purple-secondary,
        .btn-purple-outline {
            padding: 10px 20px;
            font-size: 0.9rem;
        }
        
        .skill-tooltip-text {
            white-space: normal;
            width: 200px;
            text-align: center;
        }
    }
</style>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Language switching
        const currentLang = localStorage.getItem('language') || 'en';
        const elements = document.querySelectorAll('[data-lang]');
        
        elements.forEach(element => {
            if (element.getAttribute('data-lang') === currentLang) {
                element.style.display = 'inline';
            } else {
                element.style.display = 'none';
            }
        });

        // Animate skill level bars
        const levelProgresses = document.querySelectorAll('.level-progress');
        levelProgresses.forEach(progress => {
            const level = progress.getAttribute('data-level');
            setTimeout(() => {
                progress.style.width = level + '%';
            }, 500);
        });

        // Skill card click for details
        const skillCards = document.querySelectorAll('.skill-card');
        skillCards.forEach(card => {
            card.addEventListener('click', function() {
                const skillName = this.getAttribute('data-skill');
                window.location.href = '/skills#' + skillName.toLowerCase();
            });
        });

        // Add hover effects
        const cards = document.querySelectorAll('.card-purple');
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
            });
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    });
</script>
@endsection