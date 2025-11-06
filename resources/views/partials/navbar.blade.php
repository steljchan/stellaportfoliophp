<nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="/">
            <div class="brand-content">
                <div class="brand-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="brand-text">
                    <span class="brand-name">Stella's Portfolio</span>
                    <span class="brand-subtitle">Informatics Student</span>
                </div>
            </div>
        </a>
        
        <!-- Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Content -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Navigation Links -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                        <i class="fas fa-home me-2"></i>
                        <span data-lang="en">Home</span>
                        <span data-lang="id" style="display: none;">Beranda</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">
                        <i class="fas fa-user me-2"></i>
                        <span data-lang="en">About</span>
                        <span data-lang="id" style="display: none;">Tentang</span>
                    </a>
                </li>
                <!-- Skills Menu Item -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('skill') ? 'active' : '' }}" href="{{ url('/skills') }}">
                        <i class="fas fa-code me-2"></i>
                        <span data-lang="en">Skills</span>
                        <span data-lang="id" style="display: none;">Keahlian</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('project') ? 'active' : '' }}" href="{{ url('/project') }}">
                        <i class="fas fa-project-diagram me-2"></i>
                        <span data-lang="en">Projects</span>
                        <span data-lang="id" style="display: none;">Proyek</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('blog') ? 'active' : '' }}" href="{{ url('/blog') }}">
                        <i class="fas fa-blog me-2"></i>
                        <span data-lang="en">Blog</span>
                        <span data-lang="id" style="display: none;">Blog</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">
                        <i class="fas fa-envelope me-2"></i>
                        <span data-lang="en">Contact</span>
                        <span data-lang="id" style="display: none;">Kontak</span>
                    </a>
                </li>
            </ul>

            <!-- Right Side Controls -->
            <div class="navbar-controls">
                <!-- Language Toggle -->
                <div class="nav-control-item">
                    <button class="nav-control-btn" id="langToggle" title="Toggle Language">
                        <i class="fas fa-globe me-1"></i>
                        <span id="langText">EN</span>
                    </button>
                </div>

                <!-- Dark Mode Toggle -->
                <div class="nav-control-item">
                    <button class="nav-control-btn" id="themeToggle" title="Toggle Dark Mode">
                        <i class="fas fa-moon" id="themeIcon"></i>
                    </button>
                </div>

                <!-- Music Toggle -->
                <div class="nav-control-item">
                    <button class="nav-control-btn" id="musicToggle" title="Toggle Music">
                        <i class="fas fa-music" id="musicIcon"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Music Player (Hidden by default, shows when music is playing) -->
<div class="music-player" id="musicPlayer" style="display: none;">
    <span id="nowPlaying">
        <span data-lang="en">Background Music</span>
        <span data-lang="id" style="display: none;">Musik Latar</span>
    </span>
    <button class="music-control-btn" id="playBtn">
        <i class="fas fa-play"></i>
    </button>
    <button class="music-control-btn" id="nextBtn">
        <i class="fas fa-forward"></i>
    </button>
</div>

<style>
    .navbar {
        background: linear-gradient(135deg, var(--purple-main) 0%, var(--pink) 100%) !important;
        padding: 8px 0;
        transition: all 0.3s ease;
    }

    .navbar.scrolled {
        padding: 5px 0;
        backdrop-filter: blur(10px);
        background: linear-gradient(135deg, rgba(190, 151, 195, 0.95) 0%, rgba(251, 204, 236, 0.95) 100%) !important;
    }

    /* Brand Styles */
    .navbar-brand {
        padding: 5px 0;
    }

    .brand-content {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .brand-icon {
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
    }

    .brand-text {
        display: flex;
        flex-direction: column;
        line-height: 1.2;
    }

    .brand-name {
        font-weight: 700;
        font-size: 1.3rem;
        color: white;
    }

    .brand-subtitle {
        font-size: 0.7rem;
        opacity: 0.8;
        font-weight: 400;
        color: white;
    }

    /* Navigation Links */
    .nav-link {
        position: relative;
        margin: 0 4px;
        padding: 10px 18px !important;
        border-radius: 25px;
        transition: all 0.3s ease;
        font-weight: 500;
        color: white !important;
    }

    .nav-link::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 2px;
        background: white;
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }

    .nav-link:hover::before,
    .nav-link.active::before {
        width: 70%;
    }

    .nav-link:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-2px);
    }

    .nav-link.active {
        background: rgba(255, 255, 255, 0.2);
        font-weight: 600;
    }

    /* Navbar Controls */
    .navbar-controls {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-left: 20px;
    }

    .nav-control-item {
        position: relative;
    }

    .nav-control-btn {
        background: rgba(255, 255, 255, 0.15);
        border: 2px solid rgba(255, 255, 255, 0.3);
        color: white;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        cursor: pointer;
        font-size: 1rem;
    }

    .nav-control-btn:hover {
        background: rgba(255, 255, 255, 0.25);
        border-color: rgba(255, 255, 255, 0.5);
        transform: translateY(-2px);
    }

    #langToggle {
        width: auto;
        padding: 0 15px;
        border-radius: 25px;
    }

    /* Music Player */
    .music-player {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
        background: linear-gradient(135deg, var(--purple-main) 0%, var(--pink) 100%);
        color: white;
        border-radius: 25px;
        padding: 12px 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        display: flex;
        align-items: center;
        gap: 12px;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 255, 255, 0.2);
    }

    .music-control-btn {
        background: rgba(255, 255, 255, 0.2);
        border: none;
        color: white;
        width: 35px;
        height: 35px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .music-control-btn:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: scale(1.1);
    }

    /* Responsive Design */
    @media (max-width: 991.98px) {
        .brand-subtitle {
            display: none;
        }
        
        .navbar-controls {
            margin-left: 0;
            margin-top: 15px;
            justify-content: center;
            width: 100%;
        }
        
        .nav-link {
            margin: 2px 0;
            text-align: center;
            justify-content: center;
        }
        
        .navbar-nav {
            text-align: center;
            width: 100%;
        }
        
        #langToggle {
            width: 45px;
            padding: 0;
        }
        
        #langToggle span {
            display: none;
        }
    }

    @media (max-width: 576px) {
        .brand-name {
            font-size: 1.1rem;
        }
        
        .brand-icon {
            width: 35px;
            height: 35px;
            font-size: 1rem;
        }
        
        .nav-control-btn {
            width: 40px;
            height: 40px;
        }
        
        .music-player {
            bottom: 10px;
            right: 10px;
            padding: 10px 15px;
            font-size: 0.9rem;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Navbar Scroll Effect
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.querySelector('.navbar').classList.add('scrolled');
            } else {
                document.querySelector('.navbar').classList.remove('scrolled');
            }
        });

        // Theme Toggle
        const themeToggle = document.getElementById('themeToggle');
        const themeIcon = document.getElementById('themeIcon');
        const currentTheme = localStorage.getItem('theme') || 'light';
        
        document.documentElement.setAttribute('data-bs-theme', currentTheme);
        updateThemeIcon();

        themeToggle.addEventListener('click', () => {
            const newTheme = currentTheme === 'light' ? 'dark' : 'light';
            document.documentElement.setAttribute('data-bs-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            updateThemeIcon();
        });

        function updateThemeIcon() {
            if (document.documentElement.getAttribute('data-bs-theme') === 'dark') {
                themeIcon.className = 'fas fa-sun';
                themeToggle.title = 'Switch to Light Mode';
            } else {
                themeIcon.className = 'fas fa-moon';
                themeToggle.title = 'Switch to Dark Mode';
            }
        }

        // Language Toggle
        const langToggle = document.getElementById('langToggle');
        const langText = document.getElementById('langText');
        let currentLang = localStorage.getItem('language') || 'en';
        
        updateLanguage();

        langToggle.addEventListener('click', () => {
            currentLang = currentLang === 'en' ? 'id' : 'en';
            localStorage.setItem('language', currentLang);
            updateLanguage();
            location.reload();
        });

        function updateLanguage() {
            langText.textContent = currentLang.toUpperCase();
            
            // Update all language elements
            const elements = document.querySelectorAll('[data-lang]');
            elements.forEach(element => {
                if (element.getAttribute('data-lang') === currentLang) {
                    element.style.display = 'inline';
                } else {
                    element.style.display = 'none';
                }
            });
        }

        // Music Controls
        const musicToggle = document.getElementById('musicToggle');
        const musicPlayer = document.getElementById('musicPlayer');
        const playBtn = document.getElementById('playBtn');
        const nextBtn = document.getElementById('nextBtn');
        const musicIcon = document.getElementById('musicIcon');
        const nowPlaying = document.getElementById('nowPlaying');
        
        const audio = new Audio('{{ asset("audio/background.mp3") }}');
        let isPlaying = false;
        let isMusicEnabled = localStorage.getItem('musicEnabled') === 'true';

        // Initialize music state
        if (isMusicEnabled) {
            musicPlayer.style.display = 'flex';
            musicIcon.style.color = 'var(--cream)';
        }

        musicToggle.addEventListener('click', () => {
            isMusicEnabled = !isMusicEnabled;
            localStorage.setItem('musicEnabled', isMusicEnabled);
            
            if (isMusicEnabled) {
                musicPlayer.style.display = 'flex';
                musicIcon.style.color = 'var(--cream)';
                if (!isPlaying) {
                    togglePlayback();
                }
            } else {
                musicPlayer.style.display = 'none';
                musicIcon.style.color = '';
                if (isPlaying) {
                    togglePlayback();
                }
            }
        });

        playBtn.addEventListener('click', togglePlayback);
        
        function togglePlayback() {
            if (isPlaying) {
                audio.pause();
                playBtn.innerHTML = '<i class="fas fa-play"></i>';
            } else {
                audio.play().catch(e => console.log('Audio play failed:', e));
                playBtn.innerHTML = '<i class="fas fa-pause"></i>';
            }
            isPlaying = !isPlaying;
        }

        nextBtn.addEventListener('click', () => {
            audio.currentTime = 0;
            if (!isPlaying && isMusicEnabled) {
                togglePlayback();
            }
        });

        // Update music text based on language
        if (currentLang === 'id') {
            nowPlaying.querySelector('[data-lang="id"]').style.display = 'inline';
            nowPlaying.querySelector('[data-lang="en"]').style.display = 'none';
        }
    });
</script>