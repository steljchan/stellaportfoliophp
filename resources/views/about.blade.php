@extends('layouts.app')

@section('content')
<!-- Header Section -->
<section class="about-header py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">
                    <span data-lang="en">About Me</span>
                    <span data-lang="id" style="display: none;">Tentang Saya</span>
                </h1>
                <p class="lead quote-text">
                    <span data-lang="en">"Curious mind. Data-driven. Always learning."</span>
                    <span data-lang="id" style="display: none;">"Pikiran penasaran. Berbasis data. Selalu belajar."</span>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Profile Overview -->
<section class="profile-overview py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-center mb-4 mb-lg-0">
                <div class="profile-image-container">
                    <img src="{{ asset('images/stella-profile.jpg') }}" alt="Stella" class="profile-image">
                    <div class="profile-decoration"></div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="ps-lg-4">
                    <h2 class="mb-4">
                        <span data-lang="en">Hello, I'm Stella! 👋</span>
                        <span data-lang="id" style="display: none;">Halo, Saya Stella! 👋</span>
                    </h2>
                    <p class="mb-4">
                        <span data-lang="en">I'm Stella, an Informatics student at Universitas Ciputra. My focus areas are Artificial Intelligence, Data Science, and Web Development. I'm passionate about creating systems that make people's lives easier and more meaningful.</span>
                        <span data-lang="id" style="display: none;">Saya Stella, mahasiswa Informatika di Universitas Ciputra. Area fokus saya adalah Kecerdasan Buatan, Ilmu Data, dan Pengembangan Web. Saya bersemangat menciptakan sistem yang membuat hidup orang lebih mudah dan bermakna.</span>
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-item mb-3">
                                <strong>
                                    <span data-lang="en">Location:</span>
                                    <span data-lang="id" style="display: none;">Lokasi:</span>
                                </strong>
                                <span>Surabaya, Indonesia</span>
                            </div>
                            <div class="info-item mb-3">
                                <strong>
                                    <span data-lang="en">Email:</span>
                                    <span data-lang="id" style="display: none;">Email:</span>
                                </strong>
                                <span>stella@email.com</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-item mb-3">
                                <strong>
                                    <span data-lang="en">Focus Areas:</span>
                                    <span data-lang="id" style="display: none;">Area Fokus:</span>
                                </strong>
                                <span>AI, Data Science, Web Dev</span>
                            </div>
                            <div class="info-item mb-3">
                                <strong>
                                    <span data-lang="en">Status:</span>
                                    <span data-lang="id" style="display: none;">Status:</span>
                                </strong>
                                <span>
                                    <span data-lang="en">Student</span>
                                    <span data-lang="id" style="display: none;">Mahasiswa</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Education & Journey -->
<section class="education-journey py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-header">
                    <span data-lang="en">Education & Journey</span>
                    <span data-lang="id" style="display: none;">Pendidikan & Perjalanan</span>
                </h2>
            </div>
        </div>
        
        <!-- Education -->
        <div class="row mb-5">
            <div class="col-12">
                <h3 class="mb-4 text-center">
                    <span data-lang="en">Education</span>
                    <span data-lang="id" style="display: none;">Pendidikan</span>
                </h3>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-content card-custom">
                            <div class="timeline-year">2024 – Present</div>
                            <h4>Universitas Ciputra</h4>
                            <p class="mb-0">
                                <span data-lang="en">Informatics - Artificial Intelligence & Data Science Track</span>
                                <span data-lang="id" style="display: none;">Informatika - Jalur Kecerdasan Buatan & Ilmu Data</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Organization Experience -->
        <div class="row">
            <div class="col-12">
                <h3 class="mb-4 text-center">
                    <span data-lang="en">Organization Experience</span>
                    <span data-lang="id" style="display: none;">Pengalaman Organisasi</span>
                </h3>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="org-card card-custom h-100">
                            <div class="org-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h5>
                                <span data-lang="en">Coordinator of Advice and Mentoring Division</span>
                                <span data-lang="id" style="display: none;">Koordinator Divisi Nasihat dan Mentoring</span>
                            </h5>
                            <p class="org-period">O-Week 2025</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="org-card card-custom h-100">
                            <div class="org-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <h5>
                                <span data-lang="en">Member of Student Academic Division</span>
                                <span data-lang="id" style="display: none;">Anggota Divisi Akademik Mahasiswa</span>
                            </h5>
                            <p class="org-period">
                                <span data-lang="en">Informatics Student Union</span>
                                <span data-lang="id" style="display: none;">Himpunan Mahasiswa Informatika</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="org-card card-custom h-100">
                            <div class="org-icon">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <h5>
                                <span data-lang="en">Event Division</span>
                                <span data-lang="id" style="display: none;">Divisi Acara</span>
                            </h5>
                            <p class="org-period">
                                <span data-lang="en">Entrance 3.0 Committee</span>
                                <span data-lang="id" style="display: none;">Panitia Entrance 3.0</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="org-card card-custom h-100">
                            <div class="org-icon">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <h5>PKM Project: SEMARAK</h5>
                            <p class="org-period">
                                <span data-lang="en">"Sosialisasi dan Edukasi menggunakan Aplikasi Suara-Ku"</span>
                                <span data-lang="id" style="display: none;">"Sosialisasi dan Edukasi menggunakan Aplikasi Suara-Ku"</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values & Goals -->
<section class="values-goals py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <div class="values-card card-custom h-100 text-center p-4">
                            <div class="values-icon mb-3">
                                <i class="fas fa-heart"></i>
                            </div>
                            <h4 class="mb-3">
                                <span data-lang="en">My Values</span>
                                <span data-lang="id" style="display: none;">Nilai Saya</span>
                            </h4>
                            <p class="mb-0">
                                <span data-lang="en">"I believe technology should empower people, not replace them."</span>
                                <span data-lang="id" style="display: none;">"Saya percaya teknologi harus memberdayakan orang, bukan menggantikan mereka."</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="goals-card card-custom h-100 text-center p-4">
                            <div class="goals-icon mb-3">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <h4 class="mb-3">
                                <span data-lang="en">Career Goals</span>
                                <span data-lang="id" style="display: none;">Tujuan Karir</span>
                            </h4>
                            <p class="mb-0">
                                <span data-lang="en">"To become a data-driven software engineer contributing to real-world AI applications."</span>
                                <span data-lang="id" style="display: none;">"Menjadi software engineer berbasis data yang berkontribusi pada aplikasi AI dunia nyata."</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fun Facts -->
<section class="fun-facts py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="section-header mb-4">
                    <span data-lang="en">Fun Facts</span>
                    <span data-lang="id" style="display: none;">Fakta Menarik</span>
                </h2>
                <div class="fun-facts-content">
                    <div class="fun-facts-icon mb-4">
                        <i class="fas fa-mug-hot"></i>
                    </div>
                    <p class="lead mb-4">
                        <span data-lang="en">"I enjoy designing with Figma, analyzing data, making websites and watching movies while drinking matcha 🍵ྀི."</span>
                        <span data-lang="id" style="display: none;">"Saya menikmati mendesain dengan Figma, menganalisis data, membuat website dan menonton film sambil minum matcha 🍵ྀི."</span>
                    </p>
                    
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="row g-3">
                                <div class="col-6 col-md-3">
                                    <div class="fact-item">
                                        <div class="fact-number">100+</div>
                                        <div class="fact-label">
                                            <span data-lang="en">Cups of Matcha</span>
                                            <span data-lang="id" style="display: none;">Cangkir Matcha</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="fact-item">
                                        <div class="fact-number">50+</div>
                                        <div class="fact-label">
                                            <span data-lang="en">Projects</span>
                                            <span data-lang="id" style="display: none;">Proyek</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="fact-item">
                                        <div class="fact-number">3</div>
                                        <div class="fact-label">
                                            <span data-lang="en">Languages</span>
                                            <span data-lang="id" style="display: none;">Bahasa</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="fact-item">
                                        <div class="fact-number">∞</div>
                                        <div class="fact-label">
                                            <span data-lang="en">Curiosity</span>
                                            <span data-lang="id" style="display: none;">Rasa Ingin Tahu</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<style>
    .about-header {
        background: linear-gradient(135deg, var(--purple-light) 0%, var(--pink) 100%);
        color: white;
        margin-top: 20px;
        border-radius: 0 0 30px 30px;
    }

    .quote-text {
        font-style: italic;
        opacity: 0.9;
        font-weight: 300;
    }

    .profile-image-container {
        position: relative;
        display: inline-block;
    }

    .profile-image {
        width: 250px;
        height: 250px;
        border-radius: 50%;
        object-fit: cover;
        border: 5px solid white;
        box-shadow: var(--shadow);
    }

    .profile-decoration {
        position: absolute;
        top: -10px;
        right: -10px;
        width: 60px;
        height: 60px;
        background: var(--pink);
        border-radius: 50%;
        z-index: -1;
        animation: float 3s ease-in-out infinite;
    }

    .info-item {
        padding: 8px 0;
        border-bottom: 1px solid rgba(0,0,0,0.1);
    }

    [data-bs-theme="dark"] .info-item {
        border-bottom: 1px solid rgba(255,255,255,0.1);
    }

    /* Timeline Styles */
    .timeline {
        position: relative;
        max-width: 600px;
        margin: 0 auto;
    }

    .timeline-item {
        position: relative;
        padding-left: 30px;
        margin-bottom: 30px;
    }

    .timeline-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 2px;
        background: var(--purple-main);
    }

    .timeline-content {
        padding: 20px;
        position: relative;
    }

    .timeline-year {
        background: var(--purple-main);
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        display: inline-block;
        margin-bottom: 10px;
        font-weight: 600;
    }

    /* Organization Cards */
    .org-card {
        text-align: center;
        padding: 30px 20px;
        transition: transform 0.3s ease;
    }

    .org-card:hover {
        transform: translateY(-5px);
    }

    .org-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--purple-main), var(--pink));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        color: white;
        font-size: 1.5rem;
    }

    .org-period {
        color: var(--purple-main);
        font-weight: 600;
        margin-bottom: 0;
    }

    /* Values & Goals */
    .values-icon, .goals-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, var(--purple-main), var(--pink));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        color: white;
        font-size: 2rem;
    }

    /* Fun Facts */
    .fun-facts-icon {
        font-size: 3rem;
        color: var(--purple-main);
        animation: bounce 2s infinite;
    }

    .fact-item {
        text-align: center;
        padding: 15px;
    }

    .fact-number {
        font-size: 2rem;
        font-weight: bold;
        color: var(--purple-main);
        margin-bottom: 5px;
    }

    .fact-label {
        font-size: 0.9rem;
        color: #666;
    }

    [data-bs-theme="dark"] .fact-label {
        color: #ccc;
    }

    /* Animations */
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
        40% { transform: translateY(-10px); }
        60% { transform: translateY(-5px); }
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
        const currentLang = localStorage.getItem('language') || 'en';
        const elements = document.querySelectorAll('[data-lang]');
        
        elements.forEach(element => {
            if (element.getAttribute('data-lang') === currentLang) {
                element.style.display = 'inline';
            } else {
                element.style.display = 'none';
            }
        });

        // Add floating animation to organization cards
        const orgCards = document.querySelectorAll('.org-card');
        orgCards.forEach((card, index) => {
            card.style.animationDelay = `${index * 0.2}s`;
        });
    });
</script>
@endsection