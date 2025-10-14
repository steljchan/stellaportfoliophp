@extends('layouts.app')

@section('content')
<!-- Header Section -->
<section class="contact-header py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">
                    <span data-lang="en">Get In Touch</span>
                    <span data-lang="id" style="display: none;">Hubungi Saya</span>
                </h1>
                <p class="lead">
                    <span data-lang="en">"Interested in collaborating or have a question? Let's connect!"</span>
                    <span data-lang="id" style="display: none;">"Tertarik berkolaborasi atau ada pertanyaan? Mari terhubung!"</span>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Content -->
<section class="contact-content py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row g-5">
                    <!-- Contact Form -->
                    <div class="col-lg-7">
                        <div class="contact-form-card card-custom">
                            <h3 class="mb-4">
                                <span data-lang="en">Send Me a Message</span>
                                <span data-lang="id" style="display: none;">Kirim Pesan</span>
                            </h3>
                            <form id="contactForm">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Name">
                                            <label for="name">
                                                <span data-lang="en">Your Name</span>
                                                <span data-lang="id" style="display: none;">Nama Anda</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Email">
                                            <label for="email">
                                                <span data-lang="en">Email Address</span>
                                                <span data-lang="id" style="display: none;">Alamat Email</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" id="message" placeholder="Message" style="height: 150px"></textarea>
                                            <label for="message">
                                                <span data-lang="en">Your Message</span>
                                                <span data-lang="id" style="display: none;">Pesan Anda</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-custom btn-lg w-100">
                                            <i class="fas fa-paper-plane me-2"></i>
                                            <span data-lang="en">Send Message</span>
                                            <span data-lang="id" style="display: none;">Kirim Pesan</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="col-lg-5">
                        <div class="contact-info-card card-custom h-100">
                            <h3 class="mb-4">
                                <span data-lang="en">Contact Information</span>
                                <span data-lang="id" style="display: none;">Informasi Kontak</span>
                            </h3>
                            
                            <div class="contact-info-list">
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="contact-details">
                                        <h6>Email</h6>
                                        <p>stellaportfolio@gmail.com</p>
                                    </div>
                                </div>
                                
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="fab fa-linkedin"></i>
                                    </div>
                                    <div class="contact-details">
                                        <h6>LinkedIn</h6>
                                        <a href="#" class="contact-link">linkedin.com/in/stella</a>
                                    </div>
                                </div>
                                
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="fab fa-github"></i>
                                    </div>
                                    <div class="contact-details">
                                        <h6>GitHub</h6>
                                        <a href="#" class="contact-link">github.com/stella</a>
                                    </div>
                                </div>
                                
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-details">
                                        <h6>
                                            <span data-lang="en">Location</span>
                                            <span data-lang="id" style="display: none;">Lokasi</span>
                                        </h6>
                                        <p>Surabaya, Indonesia</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Illustration -->
                            <div class="contact-illustration mt-4">
                                <div class="illustration-container">
                                    <i class="fas fa-paper-plane illustration-icon"></i>
                                    <div class="illustration-dots">
                                        <div class="dot dot-1"></div>
                                        <div class="dot dot-2"></div>
                                        <div class="dot dot-3"></div>
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
    .contact-header {
        background: linear-gradient(135deg, var(--purple-main) 0%, var(--pink) 100%);
        color: white;
        margin-top: 20px;
        border-radius: 0 0 30px 30px;
    }

    /* Contact Form */
    .contact-form-card {
        padding: 40px;
    }

    .form-floating {
        margin-bottom: 1rem;
    }

    .form-control {
        border: 2px solid var(--purple-light);
        border-radius: 12px;
        padding: 16px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: var(--purple-main);
        box-shadow: 0 0 0 0.2rem rgba(190, 151, 195, 0.25);
    }

    /* Contact Info */
    .contact-info-card {
        padding: 40px;
        background: linear-gradient(135deg, var(--cream) 0%, var(--purple-light) 100%);
    }

    .contact-info-list {
        display: flex;
        flex-direction: column;
        gap: 25px;
    }

    .contact-item {
        display: flex;
        align-items: flex-start;
        gap: 15px;
    }

    .contact-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, var(--purple-main), var(--pink));
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
        flex-shrink: 0;
    }

    .contact-details h6 {
        color: var(--purple-dark);
        margin-bottom: 5px;
        font-weight: 600;
    }

    .contact-details p {
        margin: 0;
        color: #666;
    }

    [data-bs-theme="dark"] .contact-details p {
        color: #ccc;
    }

    .contact-link {
        color: var(--purple-main);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-link:hover {
        color: var(--purple-dark);
    }

    /* Illustration */
    .contact-illustration {
        text-align: center;
    }

    .illustration-container {
        position: relative;
        display: inline-block;
    }

    .illustration-icon {
        font-size: 3rem;
        color: var(--purple-main);
        animation: float 3s ease-in-out infinite;
    }

    .illustration-dots {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .dot {
        position: absolute;
        width: 8px;
        height: 8px;
        background: var(--pink);
        border-radius: 50%;
        animation: pulse 2s infinite;
    }

    .dot-1 {
        top: 10px;
        left: 20px;
        animation-delay: 0s;
    }

    .dot-2 {
        top: 30px;
        right: 10px;
        animation-delay: 0.5s;
    }

    .dot-3 {
        bottom: 20px;
        left: 15px;
        animation-delay: 1s;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    @keyframes pulse {
        0%, 100% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.5); opacity: 0.5; }
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

        // Contact form handling
        const contactForm = document.getElementById('contactForm');
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simple form validation
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;
            
            if (name && email && message) {
                // Show success message
                const button = contactForm.querySelector('button');
                const originalText = button.innerHTML;
                
                button.innerHTML = '<i class="fas fa-check me-2"></i> Message Sent!';
                button.disabled = true;
                
                setTimeout(() => {
                    button.innerHTML = originalText;
                    button.disabled = false;
                    contactForm.reset();
                }, 3000);
            }
        });
    });
</script>
@endsection