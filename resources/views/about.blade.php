@extends('layouts.app')

@section('content')
<!-- Header Section -->
<section class="about-header py-5 text-center">
    <div class="container">
        <h1 class="display-4 fw-bold fade-in-up">
            <span data-lang="en">About Me</span>
            <span data-lang="id" style="display: none;">Tentang Saya</span>
        </h1>
        <p class="lead quote-text fade-in-up delay-1s">
            <span data-lang="en">"Curious mind. Data-driven. Always learning."</span>
            <span data-lang="id" style="display: none;">"Pikiran penasaran. Berbasis data. Selalu belajar."</span>
        </p>
    </div>
</section>

<!-- Profile Overview -->
<section class="profile-overview py-5 bg-light">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-4 text-center fade-in-left">
                <div class="profile-image-container">
                    <img src="{{ asset('images/StellaPhoto.jpg') }}" alt="Stella" class="profile-image shadow-lg">
                    <div class="profile-decoration"></div>
                </div>
                <!-- Social Media Links -->
                <div class="social-links mt-4 fade-in-left delay-1s">
                    <a href="https://www.facebook.com/Stella" class="social-link" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.twitter.com/Stella" class="social-link" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-7 fade-in-right">
                <h2 class="mb-4 fw-bold">
                    <span data-lang="en">Hello, I'm Stella! 👋</span>
                    <span data-lang="id" style="display: none;">Halo, Saya Stella! 👋</span>
                </h2>
                <p class="text-muted mb-4 fs-5">
                    <span data-lang="en">I'm Stella, an Informatics student at Universitas Ciputra focusing on AI, Data Science, and Web Development. I'm passionate about building systems that make life easier and more meaningful. I'm excited to create fantastic experiences through technology.</span>
                    <span data-lang="id" style="display: none;">Saya Stella, mahasiswa Informatika di Universitas Ciputra dengan fokus pada AI, Ilmu Data, dan Pengembangan Web. Saya bersemangat menciptakan sistem yang membuat hidup orang lebih mudah dan bermakna. Saya antusias menciptakan pengalaman fantastis melalui teknologi.</span>
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="info-item"><strong>📍 Location:</strong> Makassar, Indonesia</div>
                        <div class="info-item"><strong>📧 Email:</strong> stella@email.com</div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-item"><strong>🎯 Focus Areas:</strong> AI, Data Science, Web Dev</div>
                        <div class="info-item"><strong>🎓 Status:</strong> Student</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Education & Journey -->
<section class="education-journey py-5">
    <div class="container">
        <h2 class="section-header fade-in-up mb-5">
            <span data-lang="en">Education & Journey</span>
            <span data-lang="id" style="display: none;">Pendidikan & Perjalanan</span>
        </h2>
        <div class="timeline fade-in-up">
            <div class="timeline-item card-glass">
                <div class="timeline-year">2024 – Present</div>
                <h4>Universitas Ciputra</h4>
                <p>Informatics - Artificial Intelligence</p>
            </div>
        </div>

        <!-- Experience -->
        <h3 class="text-center mt-5 mb-4 fade-in-up">
            <span data-lang="en">Experience</span>
            <span data-lang="id" style="display: none;">Pengalaman</span>
        </h3>

        <div class="row g-4">
            @foreach ($experiences as $exp)
                <div class="col-md-6 col-lg-3 fade-in-up delay-{{ $loop->iteration }}s">
                    <div class="org-card card-custom hover-lift">
                        <i class="fas fa-briefcase org-icon"></i>
                        <h5>{{ $exp->title }}</h5>
                        <p class="org-period">{{ $exp->company }}</p>
                        <small class="text-muted">{{ $exp->start_date }} - {{ $exp->end_date }}</small>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Values & Goals -->
<section class="values-goals py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center g-4">
            <div class="col-md-6 fade-in-left">
                <div class="values-card card-custom hover-glow">
                    <i class="fas fa-heart values-icon"></i>
                    <h4>
                        <span data-lang="en">My Values</span>
                        <span data-lang="id" style="display: none;">Nilai Saya</span>
                    </h4>
                    <p>
                        <span data-lang="en">"I believe technology should empower people, not replace them."</span>
                        <span data-lang="id" style="display: none;">"Saya percaya teknologi harus memberdayakan orang, bukan menggantikan mereka."</span>
                    </p>
                </div>
            </div>
            <div class="col-md-6 fade-in-right">
                <div class="goals-card card-custom hover-glow">
                    <i class="fas fa-bullseye goals-icon"></i>
                    <h4>
                        <span data-lang="en">Career Goals</span>
                        <span data-lang="id" style="display: none;">Tujuan Karir</span>
                    </h4>
                    <p>
                        <span data-lang="en">"To become a data-driven software engineer contributing to real-world AI applications."</span>
                        <span data-lang="id" style="display: none;">"Menjadi insinyur perangkat lunak berbasis data yang berkontribusi pada aplikasi AI dunia nyata."</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fun Facts -->
<section class="fun-facts py-5 text-center fade-in-up">
    <div class="container">
        <h2 class="section-header mb-4">
            <span data-lang="en">Fun Facts</span>
            <span data-lang="id" style="display: none;">Fakta Menarik</span>
        </h2>
        <p class="lead">
            <span data-lang="en">"I enjoy designing with Figma, analyzing data, making websites, and watching movies while drinking matcha 🍵"</span>
            <span data-lang="id" style="display: none;">"Saya menikmati mendesain dengan Figma, menganalisis data, membuat website, dan menonton film sambil minum matcha 🍵"</span>
        </p>
        <div class="row justify-content-center mt-4">
            <div class="col-6 col-md-3"><div class="fact-item"><div class="fact-number">100+</div><div>
                <span data-lang="en">Cups of Matcha</span>
                <span data-lang="id" style="display: none;">Cangkir Matcha</span>
            </div></div></div>
            <div class="col-6 col-md-3"><div class="fact-item"><div class="fact-number">50+</div><div>
                <span data-lang="en">Projects</span>
                <span data-lang="id" style="display: none;">Proyek</span>
            </div></div></div>
            <div class="col-6 col-md-3"><div class="fact-item"><div class="fact-number">3</div><div>
                <span data-lang="en">Languages</span>
                <span data-lang="id" style="display: none;">Bahasa</span>
            </div></div></div>
            <div class="col-6 col-md-3"><div class="fact-item"><div class="fact-number">∞</div><div>
                <span data-lang="en">Curiosity</span>
                <span data-lang="id" style="display: none;">Rasa Ingin Tahu</span>
            </div></div></div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<style>
:root {
    --pink: #f7b2c4;
    --purple-main: #8c6cf7;
    --purple-light: #c3a9ff;
    --purple-dark: #5a3abf;
    --shadow: 0 8px 20px rgba(0,0,0,0.1);
}

/* === HEADER BAGIAN ATAS === */
.about-header {
    background: linear-gradient(135deg, var(--purple-main), var(--pink));
    color: white;
    border-radius: 0 0 40px 40px;
    position: relative;
    overflow: hidden;
    padding: 80px 0;
    text-align: center;
}

.about-header::after {
    content: '';
    position: absolute;
    bottom: -30px;
    left: 50%;
    width: 80%;
    height: 80px;
    transform: translateX(-50%);
    background: radial-gradient(circle, rgba(255,255,255,0.25), transparent 70%);
}

.quote-text {
    opacity: 0.9;
    font-style: italic;
    font-size: 1.1rem;
}

/* === PROFILE IMAGE === */
.profile-image-container {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 1.5rem 0;
}

.profile-image {
    width: 260px;
    height: 260px;
    object-fit: cover;
    border-radius: 25px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    border: 5px solid white;
}

.profile-image:hover {
    transform: scale(1.05);
    box-shadow: 0 15px 35px rgba(0,0,0,0.15);
}

/* === DEKORASI BULAT KECIL === */
.profile-decoration {
    position: absolute;
    bottom: -12px;
    right: 15px;
    width: 40px;
    height: 40px;
    background: var(--pink);
    border-radius: 50%;
    animation: float 4s ease-in-out infinite;
    z-index: -1;
    opacity: 0.75;
}

/* === SOCIAL MEDIA LINKS === */
.social-links {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-top: 25px !important;
}

.social-link {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 42px;
    height: 42px;
    background: var(--purple-main);
    color: white;
    border-radius: 50%;
    text-decoration: none;
    transition: all 0.3s ease;
    font-size: 1.1rem;
}

.social-link:hover {
    background: var(--purple-dark);
    transform: translateY(-4px);
}

/* === INFO LIST === */
.info-item {
    border-bottom: 1px solid rgba(0,0,0,0.1);
    padding: 8px 0;
    font-size: 1rem;
}

/* === TIMELINE === */
.timeline {
    border-left: 3px solid var(--purple-main);
    padding-left: 20px;
}

.timeline-year {
    background: var(--purple-main);
    color: white;
    display: inline-block;
    border-radius: 20px;
    padding: 5px 15px;
    margin-bottom: 10px;
    font-weight: 600;
}

/* === CARD STYLE === */
.card-custom {
    border: none;
    border-radius: 20px;
    background: #fff;
    box-shadow: var(--shadow);
    padding: 30px;
    transition: all 0.3s ease;
    height: 100%;
}

.hover-lift:hover { transform: translateY(-8px); }
.hover-glow:hover { box-shadow: 0 0 25px rgba(140,108,247,0.4); }

.org-icon, .values-icon, .goals-icon {
    background: linear-gradient(135deg, var(--purple-main), var(--pink));
    color: white;
    border-radius: 50%;
    padding: 20px;
    font-size: 2rem;
    margin-bottom: 15px;
}

.fact-number {
    font-weight: 700;
    font-size: 2rem;
    color: var(--purple-main);
}

/* === ANIMASI FADE DAN FLOAT === */
.fade-in-up { opacity: 0; transform: translateY(30px); animation: fadeInUp 1s forwards; }
.fade-in-left { opacity: 0; transform: translateX(-30px); animation: fadeInLeft 1s forwards; }
.fade-in-right { opacity: 0; transform: translateX(30px); animation: fadeInRight 1s forwards; }

.delay-1s { animation-delay: 0.3s; }
.delay-2s { animation-delay: 0.5s; }
.delay-3s { animation-delay: 0.7s; }
.delay-4s { animation-delay: 0.9s; }

@keyframes fadeInUp { to { opacity: 1; transform: translateY(0); } }
@keyframes fadeInLeft { to { opacity: 1; transform: translateX(0); } }
@keyframes fadeInRight { to { opacity: 1; transform: translateX(0); } }

@keyframes float {
    0%,100% { transform: translateY(0); }
    50% { transform: translateY(-8px); }
}

/* === RESPONSIVE FIXES === */
@media (max-width: 992px) {
    .profile-image { width: 220px; height: 220px; }
    .profile-decoration { width: 35px; height: 35px; bottom: -8px; right: 20px; }
}

@media (max-width: 768px) {
    .profile-image { width: 190px; height: 190px; }
    .profile-image-container { margin-bottom: 2rem; }
}

@media (max-width: 576px) {
    .profile-image { width: 160px; height: 160px; border-width: 4px; }
    .profile-decoration { width: 28px; height: 28px; bottom: -6px; right: 22px; }
    .org-card, .values-card, .goals-card { padding: 20px 15px; }
    .fact-item { margin-bottom: 15px; }
}

@media (max-width: 400px) {
    .profile-image { width: 140px; height: 140px; }
}
</style>
@endsection
