@extends('layouts.app')

@section('content')
<!-- Header Section -->
<section class="skills-header py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">
                    <span data-lang="en">Skills & Tools</span>
                    <span data-lang="id" style="display: none;">Keahlian & Alat</span>
                </h1>
                <p class="lead">
                    <span data-lang="en">"Here are the technologies and tools I've mastered throughout my learning journey."</span>
                    <span data-lang="id" style="display: none;">"Berikut adalah teknologi dan alat yang telah saya kuasai selama perjalanan belajar saya."</span>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Programming Languages -->
<section class="skills-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-header mb-4">
                    <span data-lang="en">Programming Languages</span>
                    <span data-lang="id" style="display: none;">Bahasa Pemrograman</span>
                </h2>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-3">
                <div class="skill-card card-custom text-center">
                    <div class="skill-icon python">
                        <i class="fab fa-python"></i>
                    </div>
                    <h4>Python</h4>
                    <div class="skill-level">
                        <div class="level-bar">
                            <div class="level-progress" data-level="85"></div>
                        </div>
                        <span class="level-text">Advanced</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="skill-card card-custom text-center">
                    <div class="skill-icon java">
                        <i class="fab fa-java"></i>
                    </div>
                    <h4>Java</h4>
                    <div class="skill-level">
                        <div class="level-bar">
                            <div class="level-progress" data-level="80"></div>
                        </div>
                        <span class="level-text">Advanced</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="skill-card card-custom text-center">
                    <div class="skill-icon cpp">
                        <i class="fas fa-code"></i>
                    </div>
                    <h4>C++</h4>
                    <div class="skill-level">
                        <div class="level-bar">
                            <div class="level-progress" data-level="70"></div>
                        </div>
                        <span class="level-text">Intermediate</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="skill-card card-custom text-center">
                    <div class="skill-icon sql">
                        <i class="fas fa-database"></i>
                    </div>
                    <h4>SQL</h4>
                    <div class="skill-level">
                        <div class="level-bar">
                            <div class="level-progress" data-level="75"></div>
                        </div>
                        <span class="level-text">Intermediate</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Frameworks & Libraries -->
<section class="skills-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-header mb-4">
                    <span data-lang="en">Frameworks & Libraries</span>
                    <span data-lang="id" style="display: none;">Framework & Library</span>
                </h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="framework-card card-custom">
                    <div class="framework-header">
                        <h5>AI & Data Science</h5>
                    </div>
                    <div class="framework-items">
                        <span class="framework-item">TensorFlow</span>
                        <span class="framework-item">Pandas</span>
                        <span class="framework-item">Flask</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="framework-card card-custom">
                    <div class="framework-header">
                        <h5>Web Development</h5>
                    </div>
                    <div class="framework-items">
                        <span class="framework-item">Laravel</span>
                        <span class="framework-item">Tailwind CSS</span>
                        <span class="framework-item">Bootstrap</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="framework-card card-custom">
                    <div class="framework-header">
                        <h5>Mobile Development</h5>
                    </div>
                    <div class="framework-items">
                        <span class="framework-item">Flutter</span>
                        <span class="framework-item">Dart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tools -->
<section class="skills-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-header mb-4">
                    <span data-lang="en">Tools & Software</span>
                    <span data-lang="id" style="display: none;">Alat & Software</span>
                </h2>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-6 col-md-3 col-lg-2">
                <div class="tool-card text-center">
                    <div class="tool-icon">
                        <i class="fab fa-git-alt"></i>
                    </div>
                    <span class="tool-name">Git</span>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="tool-card text-center">
                    <div class="tool-icon">
                        <i class="fab fa-github"></i>
                    </div>
                    <span class="tool-name">GitHub</span>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="tool-card text-center">
                    <div class="tool-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <span class="tool-name">VS Code</span>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="tool-card text-center">
                    <div class="tool-icon">
                        <i class="fab fa-figma"></i>
                    </div>
                    <span class="tool-name">Figma</span>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="tool-card text-center">
                    <div class="tool-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <span class="tool-name">Google Colab</span>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="tool-card text-center">
                    <div class="tool-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <span class="tool-name">IntelliJ</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Soft Skills -->
<section class="skills-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-header mb-4">
                    <span data-lang="en">Soft Skills</span>
                    <span data-lang="id" style="display: none;">Keterampilan Lunak</span>
                </h2>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-3">
                <div class="softskill-card card-custom text-center">
                    <div class="softskill-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h5>
                        <span data-lang="en">Communication</span>
                        <span data-lang="id" style="display: none;">Komunikasi</span>
                    </h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="softskill-card card-custom text-center">
                    <div class="softskill-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h5>
                        <span data-lang="en">Leadership & Teamwork</span>
                        <span data-lang="id" style="display: none;">Kepemimpinan & Kerjasama</span>
                    </h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="softskill-card card-custom text-center">
                    <div class="softskill-icon">
                        <i class="fas fa-puzzle-piece"></i>
                    </div>
                    <h5>
                        <span data-lang="en">Problem Solving</span>
                        <span data-lang="id" style="display: none;">Pemecahan Masalah</span>
                    </h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="softskill-card card-custom text-center">
                    <div class="softskill-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h5>
                        <span data-lang="en">Creativity</span>
                        <span data-lang="id" style="display: none;">Kreativitas</span>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skill Level Summary -->
<section class="skills-summary py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="summary-card card-custom p-5">
                    <h3 class="mb-4">
                        <span data-lang="en">Skill Level Overview</span>
                        <span data-lang="id" style="display: none;">Ringkasan Tingkat Keahlian</span>
                    </h3>
                    <p class="mb-4">
                        <span data-lang="en">"Intermediate in Python and Java. Comfortable with data analysis using Pandas and visualization tools. Experienced in web development with Laravel and mobile UI with Flutter."</span>
                        <span data-lang="id" style="display: none;">"Tingkat menengah dalam Python dan Java. Nyaman dengan analisis data menggunakan Pandas dan alat visualisasi. Berpengalaman dalam pengembangan web dengan Laravel dan UI mobile dengan Flutter."</span>
                    </p>
                    <div class="skill-tags">
                        <span class="skill-tag">Python</span>
                        <span class="skill-tag">Java</span>
                        <span class="skill-tag">Data Analysis</span>
                        <span class="skill-tag">Laravel</span>
                        <span class="skill-tag">Flutter</span>
                        <span class="skill-tag">AI/ML</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<style>
    .skills-header {
        background: linear-gradient(135deg, var(--purple-main) 0%, var(--pink) 100%);
        color: white;
        margin-top: 20px;
        border-radius: 0 0 30px 30px;
    }

    /* Skill Cards */
    .skill-card {
        padding: 30px 20px;
        transition: transform 0.3s ease;
    }

    .skill-card:hover {
        transform: translateY(-10px);
    }

    .skill-icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 2rem;
        color: white;
    }

    .skill-icon.python { background: linear-gradient(135deg, #3776AB, #FFD343); }
    .skill-icon.java { background: linear-gradient(135deg, #ED8B00, #5382A1); }
    .skill-icon.cpp { background: linear-gradient(135deg, #00599C, #004482); }
    .skill-icon.sql { background: linear-gradient(135deg, #4479A1, #336791); }

    .skill-level {
        margin-top: 15px;
    }

    .level-bar {
        width: 100%;
        height: 8px;
        background: #e9ecef;
        border-radius: 10px;
        overflow: hidden;
        margin-bottom: 8px;
    }

    .level-progress {
        height: 100%;
        background: linear-gradient(90deg, var(--purple-main), var(--pink));
        border-radius: 10px;
        width: 0;
        transition: width 1.5s ease-in-out;
    }

    .level-text {
        font-size: 0.9rem;
        color: var(--purple-main);
        font-weight: 600;
    }

    /* Framework Cards */
    .framework-card {
        padding: 25px;
        height: 100%;
    }

    .framework-header {
        border-bottom: 2px solid var(--purple-light);
        padding-bottom: 15px;
        margin-bottom: 15px;
    }

    .framework-header h5 {
        color: var(--purple-main);
        margin: 0;
    }

    .framework-items {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .framework-item {
        background: var(--purple-light);
        padding: 8px 15px;
        border-radius: 20px;
        font-size: 0.9rem;
        text-align: center;
        color: var(--purple-dark);
    }

    /* Tool Cards */
    .tool-card {
        padding: 20px 10px;
        transition: transform 0.3s ease;
    }

    .tool-card:hover {
        transform: scale(1.1);
    }

    .tool-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--purple-light), var(--pink));
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 15px;
        color: white;
        font-size: 1.5rem;
    }

    .tool-name {
        font-weight: 500;
        color: var(--purple-dark);
    }

    /* Soft Skills */
    .softskill-card {
        padding: 30px 20px;
        transition: transform 0.3s ease;
    }

    .softskill-card:hover {
        transform: translateY(-5px);
    }

    .softskill-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, var(--purple-main), var(--pink));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 15px;
        color: white;
        font-size: 1.8rem;
    }

    /* Summary */
    .summary-card {
        background: linear-gradient(135deg, var(--cream) 0%, var(--purple-light) 100%);
    }

    .skill-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
    }

    .skill-tag {
        background: var(--purple-main);
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.9rem;
    }

    /* Section Headers */
    .section-header {
        text-align: center;
        margin-bottom: 40px;
        position: relative;
    }

    .section-header h2 {
        font-family: "Quicksand", sans-serif;
        font-weight: 700;
        color: var(--purple-dark);
        display: inline-block;
        padding-bottom: 10px;
        position: relative;
    }

    .section-header h2::after {
        content: '';
        position: absolute;
        width: 70%;
        height: 3px;
        background: linear-gradient(90deg, transparent, var(--purple-main), transparent);
        bottom: 0;
        left: 15%;
    }

    [data-bs-theme="dark"] .section-header h2 {
        color: var(--purple-light);
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

        // Add hover effects
        const cards = document.querySelectorAll('.skill-card, .softskill-card');
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