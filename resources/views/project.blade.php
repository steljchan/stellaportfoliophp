@extends('layouts.app')

@section('content')
<!-- Header Section -->
<section class="projects-header py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">
                    <span data-lang="en">My Projects</span>
                    <span data-lang="id" style="display: none;">Proyek Saya</span>
                </h1>
                <p class="lead">
                    <span data-lang="en">"Here are some of the projects I've worked on — from academic works to personal explorations."</span>
                    <span data-lang="id" style="display: none;">"Berikut adalah beberapa proyek yang telah saya kerjakan — dari karya akademik hingga eksplorasi pribadi."</span>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Projects Grid -->
<section class="projects-grid py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Project 1 -->
            <div class="col-lg-6">
                <div class="project-card card-custom">
                    <div class="project-image">
                        <div class="project-badge">Python</div>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">BajuKita</h3>
                        <p class="project-description">
                            <span data-lang="en">A Tkinter-based clothing management app that allows users to organize, categorize, and visualize their wardrobe items.</span>
                            <span data-lang="id" style="display: none;">Aplikasi manajemen pakaian berbasis Tkinter yang memungkinkan pengguna mengatur, mengkategorikan, dan memvisualisasikan item pakaian mereka.</span>
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">Python</span>
                            <span class="tech-tag">Tkinter</span>
                        </div>
                        <div class="project-role">
                            <strong>
                                <span data-lang="en">Role:</span>
                                <span data-lang="id" style="display: none;">Peran:</span>
                            </strong>
                            <span data-lang="en">Designer & Developer</span>
                            <span data-lang="id" style="display: none;">Desainer & Pengembang</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="col-lg-6">
                <div class="project-card card-custom">
                    <div class="project-image">
                        <div class="project-badge">Java</div>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">DailyTaskManager</h3>
                        <p class="project-description">
                            <span data-lang="en">A Java console-based task manager featuring priorities, reminders, and deadline status.</span>
                            <span data-lang="id" style="display: none;">Manajer tugas berbasis konsol Java yang menampilkan prioritas, pengingat, dan status tenggat waktu.</span>
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">Java</span>
                            <span class="tech-tag">OOP Concepts</span>
                        </div>
                        <div class="project-role">
                            <strong>
                                <span data-lang="en">Role:</span>
                                <span data-lang="id" style="display: none;">Peran:</span>
                            </strong>
                            <span data-lang="en">Full Stack Developer</span>
                            <span data-lang="id" style="display: none;">Pengembang Full Stack</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="col-lg-6">
                <div class="project-card card-custom">
                    <div class="project-image">
                        <div class="project-badge">Web</div>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Job Search Website</h3>
                        <p class="project-description">
                            <span data-lang="en">A Spring Boot + MySQL web app that connects job seekers and companies with profile filtering.</span>
                            <span data-lang="id" style="display: none;">Aplikasi web Spring Boot + MySQL yang menghubungkan pencari kerja dan perusahaan dengan filter profil.</span>
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">Spring Boot</span>
                            <span class="tech-tag">MySQL</span>
                            <span class="tech-tag">HTML</span>
                            <span class="tech-tag">Tailwind</span>
                        </div>
                        <div class="project-role">
                            <strong>
                                <span data-lang="en">Role:</span>
                                <span data-lang="id" style="display: none;">Peran:</span>
                            </strong>
                            <span data-lang="en">Backend Developer</span>
                            <span data-lang="id" style="display: none;">Pengembang Backend</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="col-lg-6">
                <div class="project-card card-custom">
                    <div class="project-image">
                        <div class="project-badge">Mobile</div>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">SEMARAK (PKM Project)</h3>
                        <p class="project-description">
                            <span data-lang="en">Educational and awareness app to prevent sexual harassment through socialization and reporting features.</span>
                            <span data-lang="id" style="display: none;">Aplikasi edukasi dan kesadaran untuk mencegah pelecehan seksual melalui fitur sosialisasi dan pelaporan.</span>
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">Flutter</span>
                            <span class="tech-tag">Firebase</span>
                            <span class="tech-tag">Dart</span>
                        </div>
                        <div class="project-role">
                            <strong>
                                <span data-lang="en">Role:</span>
                                <span data-lang="id" style="display: none;">Peran:</span>
                            </strong>
                            <span data-lang="en">Mobile Developer</span>
                            <span data-lang="id" style="display: none;">Pengembang Mobile</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="projects-cta py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h2 class="mb-4">
                    <span data-lang="en">More Projects Coming Soon...</span>
                    <span data-lang="id" style="display: none;">Proyek Lainnya Segera Hadir...</span>
                </h2>
                <p class="mb-4">
                    <span data-lang="en">Check out my GitHub for all repositories</span>
                    <span data-lang="id" style="display: none;">Kunjungi GitHub saya untuk semua repository</span>
                </p>
                <a href="https://github.com/stella" class="btn btn-custom btn-lg" target="_blank">
                    <i class="fab fa-github me-2"></i>
                    <span data-lang="en">View GitHub →</span>
                    <span data-lang="id" style="display: none;">Lihat GitHub →</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<style>
    .projects-header {
        background: linear-gradient(135deg, var(--purple-main) 0%, var(--pink) 100%);
        color: white;
        margin-top: 20px;
        border-radius: 0 0 30px 30px;
    }

    /* Project Cards */
    .project-card {
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
    }

    .project-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(190, 151, 195, 0.3);
    }

    .project-image {
        height: 200px;
        background: linear-gradient(135deg, var(--purple-light), var(--pink));
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 4rem;
    }

    .project-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        background: rgba(255, 255, 255, 0.9);
        color: var(--purple-main);
        padding: 5px 15px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.8rem;
    }

    .project-content {
        padding: 25px;
    }

    .project-title {
        color: var(--purple-dark);
        margin-bottom: 15px;
        font-weight: 700;
    }

    .project-description {
        color: #666;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    [data-bs-theme="dark"] .project-description {
        color: #ccc;
    }

    .project-tech {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 15px;
    }

    .tech-tag {
        background: var(--purple-light);
        color: var(--purple-dark);
        padding: 4px 12px;
        border-radius: 15px;
        font-size: 0.8rem;
        font-weight: 500;
    }

    .project-role {
        border-top: 1px solid #eee;
        padding-top: 15px;
        color: #666;
    }

    [data-bs-theme="dark"] .project-role {
        border-top: 1px solid #444;
        color: #ccc;
    }

    /* CTA Section */
    .projects-cta {
        border-radius: 30px 30px 0 0;
    }
</style>
@endsection

@section('scripts')
<script>
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

        // Add project card animations
        const projectCards = document.querySelectorAll('.project-card');
        projectCards.forEach((card, index) => {
            card.style.animationDelay = `${index * 0.2}s`;
            card.classList.add('fade-in');
        });
    });
</script>
@endsection