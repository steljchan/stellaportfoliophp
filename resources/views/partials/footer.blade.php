<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <!-- Main Footer -->
            <div class="footer-main py-5">
                <div class="row">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="footer-brand">
                            <div class="brand-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="brand-info">
                                <h5>Stella's Portfolio</h5>
                                <p class="mb-0">
                                    <span data-lang="en">Informatics Student & AI Enthusiast</span>
                                    <span data-lang="id" style="display: none;">Mahasiswa Informatika & Pencinta AI</span>
                                </p>
                            </div>
                        </div>
                        <div class="footer-description mt-3">
                            <p class="small">
                                <span data-lang="en">Creating meaningful solutions through code and creativity. Let's build something amazing together!</span>
                                <span data-lang="id" style="display: none;">Menciptakan solusi bermakna melalui kode dan kreativitas. Mari bangun sesuatu yang luar biasa bersama!</span>
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 mb-4 mb-lg-0">
                        <h6 class="footer-title">
                            <span data-lang="en">Navigation</span>
                            <span data-lang="id" style="display: none;">Navigasi</span>
                        </h6>
                        <div class="footer-links">
                            <a href="{{ url('/') }}">
                                <i class="fas fa-chevron-right me-2"></i>
                                <span data-lang="en">Home</span>
                                <span data-lang="id" style="display: none;">Beranda</span>
                            </a>
                            <a href="{{ url('/about') }}">
                                <i class="fas fa-chevron-right me-2"></i>
                                <span data-lang="en">About</span>
                                <span data-lang="id" style="display: none;">Tentang</span>
                            </a>
                            <a href="{{ url('/skills') }}">
                                <i class="fas fa-chevron-right me-2"></i>
                                <span data-lang="en">Skills</span>
                                <span data-lang="id" style="display: none;">Keahlian</span>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 mb-4 mb-lg-0">
                        <h6 class="footer-title" style="visibility: hidden;">More</h6>
                        <div class="footer-links">
                            <a href="{{ url('/project') }}">
                                <i class="fas fa-chevron-right me-2"></i>
                                <span data-lang="en">Projects</span>
                                <span data-lang="id" style="display: none;">Proyek</span>
                            </a>
                            <a href="{{ url('/blog') }}">
                                <i class="fas fa-chevron-right me-2"></i>
                                <span data-lang="en">Blog</span>
                                <span data-lang="id" style="display: none;">Blog</span>
                            </a>
                            <a href="{{ url('/contact') }}">
                                <i class="fas fa-chevron-right me-2"></i>
                                <span data-lang="en">Contact</span>
                                <span data-lang="id" style="display: none;">Kontak</span>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <h6 class="footer-title">
                            <span data-lang="en">Let's Connect</span>
                            <span data-lang="id" style="display: none;">Mari Terhubung</span>
                        </h6>
                        <div class="social-links">
                            <a href="#" class="social-link" title="GitHub">
                                <i class="fab fa-github"></i>
                                <span>GitHub</span>
                            </a>
                            <a href="#" class="social-link" title="LinkedIn">
                                <i class="fab fa-linkedin"></i>
                                <span>LinkedIn</span>
                            </a>
                            <a href="#" class="social-link" title="Instagram">
                                <i class="fab fa-instagram"></i>
                                <span>Instagram</span>
                            </a>
                            <a href="mailto:stellaportfolio@gmail.com" class="social-link" title="Email">
                                <i class="fas fa-envelope"></i>
                                <span>Email</span>
                            </a>
                        </div>
                        
                        <div class="newsletter mt-4">
                            <p class="small mb-2">
                                <span data-lang="en">Subscribe to my newsletter</span>
                                <span data-lang="id" style="display: none;">Berlangganan newsletter saya</span>
                            </p>
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Your email">
                                <button class="btn btn-newsletter" type="button">
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    .footer {
        background: linear-gradient(135deg, var(--purple-main) 0%, var(--pink) 100%);
        color: white;
        margin-top: 60px;
        border-top: 3px solid rgba(255, 255, 255, 0.2);
        position: relative;
        overflow: hidden;
    }

    .footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    }

    .footer-brand {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 15px;
    }

    .footer-brand .brand-icon {
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
        border: 2px solid rgba(255, 255, 255, 0.3);
    }

    .brand-info h5 {
        margin: 0 0 5px 0;
        color: white;
        font-weight: 700;
    }

    .brand-info p {
        margin: 0;
        opacity: 0.9;
        font-size: 0.9rem;
    }

    .footer-description p {
        opacity: 0.8;
        line-height: 1.5;
        margin: 0;
    }

    .footer-title {
        color: white;
        font-weight: 600;
        margin-bottom: 20px;
        font-size: 1.1rem;
        position: relative;
        display: inline-block;
    }

    .footer-title::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 30px;
        height: 2px;
        background: rgba(255, 255, 255, 0.5);
        border-radius: 2px;
    }

    .footer-links {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .footer-links a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        font-size: 0.9rem;
    }

    .footer-links a:hover {
        color: white;
        transform: translateX(5px);
    }

    .footer-links a i {
        font-size: 0.7rem;
        opacity: 0.7;
        transition: all 0.3s ease;
    }

    .footer-links a:hover i {
        opacity: 1;
        transform: translateX(2px);
    }

    .social-links {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
    }

    .social-link {
        background: rgba(255, 255, 255, 0.1);
        color: white;
        text-decoration: none;
        padding: 10px 15px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
        transition: all 0.3s ease;
        border: 1px solid rgba(255, 255, 255, 0.2);
        font-size: 0.9rem;
    }

    .social-link:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: translateY(-2px);
        border-color: rgba(255, 255, 255, 0.3);
    }

    .social-link i {
        font-size: 1.1rem;
        width: 20px;
        text-align: center;
    }

    .newsletter .form-control {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.3);
        color: white;
        border-radius: 8px 0 0 8px;
        border-right: none;
    }

    .newsletter .form-control::placeholder {
        color: rgba(255, 255, 255, 0.7);
    }

    .newsletter .form-control:focus {
        background: rgba(255, 255, 255, 0.15);
        border-color: rgba(255, 255, 255, 0.5);
        color: white;
        box-shadow: none;
    }

    .btn-newsletter {
        background: rgba(255, 255, 255, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.3);
        color: white;
        border-radius: 0 8px 8px 0;
        transition: all 0.3s ease;
    }

    .btn-newsletter:hover {
        background: rgba(255, 255, 255, 0.3);
        border-color: rgba(255, 255, 255, 0.5);
    }

    .footer-bottom {
        border-top: 1px solid rgba(255, 255, 255, 0.2);
        background: rgba(0, 0, 0, 0.1);
    }

    .footer-bottom p {
        margin: 0;
        opacity: 0.9;
        font-size: 0.9rem;
    }

    .footer-heart {
        color: #ff6b8b;
        animation: heartbeat 1.5s ease infinite;
        margin: 0 5px;
    }

    .footer-extra {
        display: flex;
        gap: 20px;
        justify-content: flex-end;
    }

    .extra-item {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 0.8rem;
        opacity: 0.8;
    }

    .extra-item i {
        font-size: 0.7rem;
    }

    @keyframes heartbeat {
        0% { transform: scale(1); }
        5% { transform: scale(1.1); }
        10% { transform: scale(1); }
        15% { transform: scale(1.2); }
        50% { transform: scale(1); }
        100% { transform: scale(1); }
    }

    /* Dark mode adjustments */
    [data-bs-theme="dark"] .footer {
        background: linear-gradient(135deg, var(--purple-main) 0%, var(--pink) 100%);
    }

    /* Responsive Design */
    @media (max-width: 991.98px) {
        .footer-main {
            text-align: center;
        }
        
        .footer-brand {
            justify-content: center;
        }
        
        .social-links {
            grid-template-columns: 1fr;
            max-width: 200px;
            margin: 0 auto;
        }
        
        .footer-extra {
            justify-content: center;
            margin-top: 15px;
        }
        
        .newsletter {
            max-width: 300px;
            margin: 0 auto;
        }
    }

    @media (max-width: 767.98px) {
        .footer-extra {
            flex-direction: column;
            gap: 10px;
            align-items: center;
        }
        
        .footer-links a {
            justify-content: center;
        }
        
        .social-links {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (max-width: 576px) {
        .social-links {
            grid-template-columns: 1fr;
        }
        
        .footer-links {
            gap: 8px;
        }
        
        .footer-main {
            padding: 30px 0;
        }
        
        .footer-bottom {
            padding: 20px 0;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Language switching for footer
        const currentLang = localStorage.getItem('language') || 'en';
        const elements = document.querySelectorAll('[data-lang]');
        
        elements.forEach(element => {
            if (element.getAttribute('data-lang') === currentLang) {
                element.style.display = 'inline';
            } else {
                element.style.display = 'none';
            }
        });

        // Newsletter form handling
        const newsletterBtn = document.querySelector('.btn-newsletter');
        const newsletterInput = document.querySelector('.newsletter input');
        
        newsletterBtn.addEventListener('click', function() {
            const email = newsletterInput.value;
            if (email && isValidEmail(email)) {
                // Simulate newsletter subscription
                newsletterInput.value = '';
                const originalHtml = newsletterBtn.innerHTML;
                newsletterBtn.innerHTML = '<i class="fas fa-check"></i>';
                newsletterBtn.style.background = 'var(--admin-success)';
                
                setTimeout(() => {
                    newsletterBtn.innerHTML = originalHtml;
                    newsletterBtn.style.background = '';
                }, 2000);
            }
        });

        function isValidEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }
    });
</script>