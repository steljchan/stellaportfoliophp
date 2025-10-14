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
                    </div>
                    
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <h6 class="footer-title">
                            <span data-lang="en">Quick Links</span>
                            <span data-lang="id" style="display: none;">Tautan Cepat</span>
                        </h6>
                        <div class="footer-links">
                            <a href="{{ url('/') }}">
                                <span data-lang="en">Home</span>
                                <span data-lang="id" style="display: none;">Beranda</span>
                            </a>
                            <a href="{{ url('/about') }}">
                                <span data-lang="en">About</span>
                                <span data-lang="id" style="display: none;">Tentang</span>
                            </a>
                            <a href="{{ url('/project') }}">
                                <span data-lang="en">Projects</span>
                                <span data-lang="id" style="display: none;">Proyek</span>
                            </a>
                            <a href="{{ url('/contact') }}">
                                <span data-lang="en">Contact</span>
                                <span data-lang="id" style="display: none;">Kontak</span>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <h6 class="footer-title">
                            <span data-lang="en">Connect With Me</span>
                            <span data-lang="id" style="display: none;">Terhubung Dengan Saya</span>
                        </h6>
                        <div class="social-links">
                            <a href="#" class="social-link">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="mailto:stellaportfolio@gmail.com" class="social-link">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer Bottom -->
            <div class="footer-bottom py-4">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="mb-0">
                            © {{ date('Y') }} Stella's Portfolio — 
                            <span data-lang="en">Crafted with</span>
                            <span data-lang="id" style="display: none;">Dibuat dengan</span>
                            <span class="footer-heart"><i class="fas fa-heart"></i></span>
                            <span data-lang="en">and Laravel</span>
                            <span data-lang="id" style="display: none;">dan Laravel</span>
                        </p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <div class="footer-extra">
                            <span class="extra-item">
                                <i class="fas fa-code"></i>
                                <span data-lang="en">Made with Bootstrap 5</span>
                                <span data-lang="id" style="display: none;">Dibuat dengan Bootstrap 5</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>