@extends('layouts.app')

@section('title', 'Portfolio - Iqmal Nuriadi | Systems Analyst & QA Specialist')

@section('content')
<!-- Hero Section -->
<section id="home" class="hero-section position-relative overflow-hidden">
    <div class="hero-gradient"></div>
    <div class="hero-particles"></div>
    <div class="container-fluid px-lg-5 position-relative" style="z-index: 2;">
        <div class="row align-items-center" style="min-height: 100vh; padding: 120px 0;">
            <div class="col-lg-6 mb-5 mb-lg-0 ps-lg-5">
                <div class="hero-content" data-aos="fade-right">
                    <h1 class="hero-title fw-bold mb-4" style="font-size: clamp(2.5rem, 5vw, 4.5rem); line-height: 1.2;">
                        Halo, Saya <br>
                        <span class="gradient-text-hero">Iqmal Nuriadi</span>
                    </h1>
                    <p class="hero-subtitle mb-5" style="font-size: clamp(1.1rem, 2vw, 1.4rem); line-height: 1.8; color: rgba(255,255,255,0.95); max-width: 600px;">
                        Seorang lulusan baru program studi <strong style="color: white;">Sistem Informasi</strong> yang memiliki minat yang kuat dalam analisis dan pengujian untuk meningkatkan efisiensi proses bisnis dan teknis.
                    </p>
                    <div class="d-flex gap-4 flex-wrap mb-5">
                        <a href="/proyek" class="btn btn-light btn-lg rounded-pill px-5 py-3 shadow-lg hover-lift fw-semibold" style="font-size: 1.1rem;">
                            <i class="fas fa-briefcase me-2"></i>Lihat Proyek
                        </a>
                        <a href="#contact" class="btn btn-outline-light btn-lg rounded-pill px-5 py-3 hover-lift fw-semibold" style="font-size: 1.1rem; border-width: 2px;">
                            <i class="fas fa-envelope me-2"></i>Hubungi Saya
                        </a>
                    </div>
                    
                    <!-- Social Links -->
                    <div class="hero-social d-flex gap-3 align-items-center">
                        <span class="text-white-50 me-2" style="font-size: 0.95rem;">Follow me:</span>
                        <a href="https://www.linkedin.com/in/iqmal-nuriadi-007156197/" target="_blank" class="social-icon">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="mailto:inuriadi73@gmail.com" class="social-icon">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="https://github.com/iqmlcaiera15" target="_blank" class="social-icon">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center pe-lg-5" data-aos="fade-left">
                <div class="profile-image-wrapper-large position-relative d-inline-block">
                    <div class="profile-circle-large"></div>
                    <div class="profile-circle-secondary"></div>
                    <div class="profile-image-container-large">
                        <img src="https://porto-bucket-php.s3.ap-southeast-2.amazonaws.com/DSCF1081er.jpg" 
                            alt="Foto Iqmal Nuriadi" 
                            class="profile-image-large shadow-lg">
                    </div>
                    <!-- Floating Elements - Larger -->
                    <div class="floating-badge-large badge-1">
                        <i class="fas fa-check-circle text-success" style="font-size: 1.5rem;"></i>
                    </div>
                    <div class="floating-badge-large badge-2">
                        <i class="fas fa-code text-primary" style="font-size: 1.5rem;"></i>
                    </div>
                    <div class="floating-badge-large badge-3">
                        <i class="fas fa-bug text-danger" style="font-size: 1.5rem;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="scroll-indicator" data-aos="fade-up" data-aos-delay="1000">
        <a href="#about" class="text-white text-decoration-none">
            <div class="mouse"></div>
            <p class="mt-3 small fw-semibold">Scroll Down</p>
        </a>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section-padding bg-light">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6" data-aos="fade-up">
                <div class="section-header mb-4">
                    <span class="text-primary fw-semibold text-uppercase letter-spacing-1">Tentang Saya</span>
                    <h2 class="display-5 fw-bold mt-2 mb-4">Passionate About Quality & Analysis</h2>
                </div>
                <p class="text-muted mb-4 lh-lg">
                    Mahasiswa tingkat akhir Sistem Informasi di Universitas Telkom dengan minat mendalam pada analisis dan testing untuk meningkatkan efisiensi proses bisnis dan teknis. Memiliki pengalaman praktis sebagai Quality Assurance Specialist di PT. Surya Madistrindo.
                </p>
                <p class="text-muted mb-4 lh-lg">
                    Saya memiliki pemahaman konseptual yang kuat tentang manual testing di berbagai bahasa pemrograman seperti PHP dan Flutter, serta berpengalaman dalam merancang Test Case Procedures (TCPs) dan berkolaborasi dengan tim development.
                </p>
                
                @php
                    $qaStart = \Carbon\Carbon::parse('2025-04-01');
                    $qaMonths = max(1, (int) $qaStart->diffInMonths(now()));
                @endphp
                <!-- Stats Cards -->
                <div class="row g-3 mt-4">
                    <div class="col-6">
                        <div class="stat-card bg-white rounded-4 p-4 shadow-sm hover-lift h-100">
                            <div class="d-flex align-items-center mb-2">
                                <div class="icon-box bg-primary bg-opacity-10 rounded-3 p-2 me-3">
                                    <i class="fas fa-graduation-cap text-primary"></i>
                                </div>
                            </div>
                            <h3 class="fw-bold mb-1">3.58<span class="text-muted fs-5">/4.00</span></h3>
                            <p class="text-muted small mb-0">IPK Universitas</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-card bg-white rounded-4 p-4 shadow-sm hover-lift h-100">
                            <div class="d-flex align-items-center mb-2">
                                <div class="icon-box bg-success bg-opacity-10 rounded-3 p-2 me-3">
                                    <i class="fas fa-briefcase text-success"></i>
                                </div>
                            </div>
                            <h3 class="fw-bold mb-1">{{ $qaMonths }} Bulan</h3>
                            <p class="text-muted small mb-0">Pengalaman QA</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="info-card bg-white rounded-4 shadow-sm p-4 p-lg-5 h-100">
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-box-large bg-primary bg-opacity-10 rounded-3 p-3 me-3">
                            <i class="fas fa-user text-primary fs-4"></i>
                        </div>
                        <h4 class="fw-bold mb-0">Informasi Personal</h4>
                    </div>
                    
                    <ul class="list-unstyled info-list">
                        <li class="mb-3 pb-3 border-bottom">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-id-card text-primary me-3 fs-5"></i>
                                <div>
                                    <small class="text-muted d-block">Nama</small>
                                    <strong>Iqmal Nuriadi</strong>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 pb-3 border-bottom">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-envelope text-primary me-3 fs-5"></i>
                                <div>
                                    <small class="text-muted d-block">Email</small>
                                    <strong>inuriadi73@gmail.com</strong>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 pb-3 border-bottom">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-phone text-primary me-3 fs-5"></i>
                                <div>
                                    <small class="text-muted d-block">Telepon</small>
                                    <strong>081224249920</strong>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 pb-3 border-bottom">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-map-marker-alt text-primary me-3 fs-5"></i>
                                <div>
                                    <small class="text-muted d-block">Lokasi</small>
                                    <strong>Bandung, Jawa Barat</strong>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 pb-3 border-bottom">
                            <div class="d-flex align-items-center">
                                <i class="fab fa-linkedin text-primary me-3 fs-5"></i>
                                <div>
                                    <small class="text-muted d-block">LinkedIn</small>
                                    <a href="https://www.linkedin.com/in/iqmal-nuriadi-007156197/" target="_blank" class="text-decoration-none fw-semibold">LinkedIn Profile</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-circle-notch text-success me-3 fs-5"></i>
                                <div>
                                    <small class="text-muted d-block">Status</small>
                                    <strong class="text-success">Mencari Peluang Karir</strong>
                                </div>
                            </div>
                        </li>
                    </ul>
                    
                    <a href="https://porto-bucket-php.s3.ap-southeast-2.amazonaws.com/Iqmal+Nuriadi-CV.pdf" class="btn btn-primary w-100 rounded-pill mt-4 hover-lift">
                        <i class="fas fa-download me-2"></i>Download CV
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section id="experience" class="section-padding">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="text-primary fw-semibold text-uppercase letter-spacing-1">Pengalaman</span>
            <h2 class="display-5 fw-bold mt-2 mb-3">Pengalaman Kerja</h2>
            <p class="lead text-muted">Pengalaman profesional dalam bidang Quality Assurance</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
                <div class="experience-card bg-white rounded-4 shadow-sm p-4 p-lg-5 position-relative">
                    <div class="experience-badge position-absolute top-0 end-0 m-4">
                        <span class="badge bg-primary rounded-pill px-3 py-2">
                            <i class="fas fa-calendar-alt me-2"></i>Jun 2024 - Dec 2024
                        </span>
                    </div>
                    
                    <div class="d-flex align-items-start mb-4">
                        <div class="company-logo bg-primary bg-opacity-10 rounded-3 p-3 me-4">
                            <i class="fas fa-building text-primary fs-3"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold gradient-text mb-2">Quality Assurance Specialist Intern</h4>
                            <h5 class="fw-bold mb-1">PT. Surya Madistrindo</h5>
                            <p class="text-muted mb-0">
                                <i class="fas fa-map-marker-alt me-2"></i>Jakarta Pusat, Jakarta
                            </p>
                        </div>
                    </div>
                    
                    <div class="responsibilities mt-4">
                        <h6 class="fw-semibold mb-3 text-uppercase" style="font-size: 0.875rem; letter-spacing: 0.5px;">
                            <i class="fas fa-tasks me-2 text-primary"></i>Key Responsibilities
                        </h6>
                        <ul class="custom-list">
                            <li class="mb-3">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Melakukan manual software testing pada platform web dan mobile untuk mengidentifikasi masalah fungsional, inkonsistensi UI/UX, dan bug sistem
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Merancang dan memelihara Test Case Procedures (TCPs) berdasarkan Functional Design Document (FDD) dan Business Requirement Documents (BRDs)
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Berkolaborasi dengan Developer dan System Analyst menggunakan project management tools untuk melaporkan dan menyelesaikan masalah
                            </li>
                            <li>
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Berkontribusi dalam pembuatan design system untuk aplikasi internal, meningkatkan konsistensi UI dan reusabilitas komponen
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 mt-4" data-aos="fade-up" data-aos-delay="200">
                <div class="experience-card bg-white rounded-4 shadow-sm p-4 p-lg-5 position-relative">
                    <div class="experience-badge position-absolute top-0 end-0 m-4">
                        <span class="badge bg-primary rounded-pill px-3 py-2">
                            <i class="fas fa-calendar-alt me-2"></i>Oktober 2025 - Sekarang
                        </span>
                    </div>
                    
                    <div class="d-flex align-items-start mb-4">
                        <div class="company-logo bg-primary bg-opacity-10 rounded-3 p-3 me-4">
                            <i class="fas fa-building text-primary fs-3"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold gradient-text mb-2">Quality Assurance Specialist Intern</h4>
                            <h5 class="fw-bold mb-1">PT. Neuronworks Indonesia</h5>
                            <p class="text-muted mb-0">
                                <i class="fas fa-map-marker-alt me-2"></i>Bandung, Jawa Barat
                            </p>
                        </div>
                    </div>
                    
                    <div class="responsibilities mt-4">
                        <h6 class="fw-semibold mb-3 text-uppercase" style="font-size: 0.875rem; letter-spacing: 0.5px;">
                            <i class="fas fa-tasks me-2 text-primary"></i>Key Responsibilities
                        </h6>
                        <ul class="custom-list">
                            <li class="mb-3">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Menjalankan pengujian manual pada aplikasi web dan mobile untuk menemukan defect fungsional, isu alur, serta ketidaksesuaian UI/UX
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Menyusun dan memperbarui Test Case Procedures (TCPs) dengan acuan FDD serta BRD agar pengujian tetap selaras dengan kebutuhan bisnis
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Mengembangkan TCP automation untuk memperluas coverage dan mempercepat siklus regression testing
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Menyiapkan data uji untuk kebutuhan UAT dan SIT sehingga skenario berjalan konsisten sesuai requirement
                            </li>
                            <li>
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Berkoordinasi dengan Developer dan System Analyst melalui tools manajemen proyek untuk pelaporan bug dan tindak lanjut perbaikan
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="text-primary fw-semibold text-uppercase letter-spacing-1">Keahlian</span>
            <h2 class="display-5 fw-bold mt-2 mb-3">Keahlian Saya</h2>
            <p class="lead text-muted">Teknologi dan tools yang saya kuasai</p>
        </div>
        
        <div class="row g-4">
            <!-- Hard Skills -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="skills-card bg-white rounded-4 shadow-sm p-4 p-lg-5 h-100">
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-box-large bg-primary bg-opacity-10 rounded-3 p-3 me-3">
                            <i class="fas fa-code text-primary fs-4"></i>
                        </div>
                        <h4 class="fw-bold mb-0">Hard Skills</h4>
                    </div>
                    
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="skill-item bg-light rounded-3 p-3 hover-lift">
                                <i class="fas fa-code text-primary mb-2 fs-5"></i>
                                <p class="mb-0 fw-semibold">PHP</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="skill-item bg-light rounded-3 p-3 hover-lift">
                                <i class="fab fa-python text-primary mb-2 fs-5"></i>
                                <p class="mb-0 fw-semibold">Python</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="skill-item bg-light rounded-3 p-3 hover-lift">
                                <i class="fas fa-database text-primary mb-2 fs-5"></i>
                                <p class="mb-0 fw-semibold">SQL</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="skill-item bg-light rounded-3 p-3 hover-lift">
                                <i class="fas fa-brain text-primary mb-2 fs-5"></i>
                                <p class="mb-0 fw-semibold">Machine Learning</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="skill-item bg-light rounded-3 p-3 hover-lift">
                                <i class="fas fa-sitemap text-primary mb-2 fs-5"></i>
                                <p class="mb-0 fw-semibold">UML</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="skill-item bg-light rounded-3 p-3 hover-lift">
                                <i class="fas fa-tasks text-primary mb-2 fs-5"></i>
                                <p class="mb-0 fw-semibold">Jira</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="skill-item bg-light rounded-3 p-3 hover-lift">
                                <i class="fas fa-bug text-primary mb-2 fs-5"></i>
                                <p class="mb-0 fw-semibold">Software Testing</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="skill-item bg-light rounded-3 p-3 hover-lift">
                                <i class="fas fa-paint-brush text-primary mb-2 fs-5"></i>
                                <p class="mb-0 fw-semibold">UI/UX Design</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Soft Skills -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="skills-card bg-white rounded-4 shadow-sm p-4 p-lg-5 h-100">
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-box-large bg-success bg-opacity-10 rounded-3 p-3 me-3">
                            <i class="fas fa-users text-success fs-4"></i>
                        </div>
                        <h4 class="fw-bold mb-0">Soft Skills</h4>
                    </div>
                    
                    <div class="d-flex flex-wrap gap-3">
                        <span class="tech-badge-modern">
                            <i class="fas fa-award me-2"></i>Persistent
                        </span>
                        <span class="tech-badge-modern">
                            <i class="fas fa-lightbulb me-2"></i>Curious
                        </span>
                        <span class="tech-badge-modern">
                            <i class="fas fa-comments me-2"></i>Communicative
                        </span>
                        <span class="tech-badge-modern">
                            <i class="fas fa-users me-2"></i>Team Player
                        </span>
                        <span class="tech-badge-modern">
                            <i class="fas fa-puzzle-piece me-2"></i>Problem Solving
                        </span>
                        <span class="tech-badge-modern">
                            <i class="fas fa-chart-line me-2"></i>Analytical Thinking
                        </span>
                        <span class="tech-badge-modern">
                            <i class="fas fa-search me-2"></i>Attention to Detail
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Certifications Section -->
<section id="certifications" class="section-padding">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="text-primary fw-semibold text-uppercase letter-spacing-1">Kredensial</span>
            <h2 class="display-5 fw-bold mt-2 mb-3">Sertifikasi & Pencapaian</h2>
            <p class="lead text-muted">Sertifikasi profesional dan pencapaian akademik</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="cert-card bg-white rounded-4 shadow-sm p-4 p-lg-5 h-100 hover-lift">
                    <div class="d-flex align-items-start mb-4">
                        <div class="cert-icon bg-primary bg-opacity-10 rounded-3 p-3 me-3">
                            <i class="fas fa-shield-alt text-primary fs-2"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="fw-bold mb-0">Fortinet Certified Fundamentals in Cybersecurity</h5>
                            </div>
                            <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3 py-1 mb-3">2024</span>
                        </div>
                    </div>
                    <p class="text-muted mb-0">Pengetahuan dasar cybersecurity termasuk network security, threat landscape, secure access, dan konfigurasi firewall.</p>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="cert-card bg-white rounded-4 shadow-sm p-4 p-lg-5 h-100 hover-lift">
                    <div class="d-flex align-items-start mb-4">
                        <div class="cert-icon bg-success bg-opacity-10 rounded-3 p-3 me-3">
                            <i class="fas fa-chart-line text-success fs-2"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="fw-bold mb-0">Certified System Analyst</h5>
                            </div>
                            <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-1 mb-3">2024</span>
                        </div>
                    </div>
                    <p class="text-muted mb-0">Konsep analisis sistem menggunakan UML dan analisis proses bisnis, termasuk pembuatan use case diagrams dan activity diagrams.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Publications Section -->
<section id="publications" class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="text-primary fw-semibold text-uppercase letter-spacing-1">Penelitian</span>
            <h2 class="display-5 fw-bold mt-2 mb-3">Publikasi Penelitian</h2>
            <p class="lead text-muted">Kontribusi dalam penelitian dan publikasi ilmiah</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
                <div class="publication-card bg-white rounded-4 shadow-sm p-4 p-lg-5">
                    <div class="d-flex align-items-start">
                        <div class="pub-icon bg-primary bg-opacity-10 rounded-3 p-3 me-4">
                            <i class="fas fa-file-alt text-primary fs-1"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h4 class="fw-bold mb-3">Health Risk Detection and Early Screening of Maternal Health in Pregnant Women Using a Stacking Machine Learning Models</h4>
                            <p class="text-muted mb-3">
                                <i class="fas fa-user-edit me-2"></i>Nuriadi, I., et al. 
                                <span class="mx-2">•</span>
                                <i class="fas fa-calendar me-2"></i>2025
                            </p>
                            <p class="text-muted mb-4">Penelitian ini mengusulkan metode stacking ensemble machine learning untuk mendeteksi risiko kesehatan ibu dan melakukan skrining dini selama kehamilan. Model berhasil diintegrasikan ke dalam aplikasi kesehatan mobile untuk meningkatkan perawatan preventif dan mendukung intervensi dini.</p>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="tech-badge-modern">Machine Learning</span>
                                <span class="tech-badge-modern">Healthcare</span>
                                <span class="tech-badge-modern">Mobile Application</span>
                                <span class="tech-badge-modern">Stacking Ensemble</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Education Section -->
<section id="education" class="section-padding">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="text-primary fw-semibold text-uppercase letter-spacing-1">Pendidikan</span>
            <h2 class="display-5 fw-bold mt-2 mb-3">Riwayat Pendidikan</h2>
            <p class="lead text-muted">Riwayat pendidikan formal</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="edu-card bg-white rounded-4 shadow-sm p-4 p-lg-5 h-100 hover-lift">
                    <div class="d-flex align-items-start mb-4">
                        <div class="edu-icon bg-primary bg-opacity-10 rounded-3 p-3 me-3">
                            <i class="fas fa-university text-primary fs-3"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start flex-wrap gap-2 mb-2">
                                <div>
                                    <h5 class="fw-bold mb-1">Sarjana Sistem Informasi</h5>
                                    <h6 class="text-primary mb-1">Universitas Telkom</h6>
                                    <p class="text-muted small mb-0">
                                        <i class="fas fa-map-marker-alt me-2"></i>Bandung, Jawa Barat
                                    </p>
                                </div>
                                <div class="text-end">
                                    <span class="badge bg-primary rounded-pill px-3 py-2 mb-2">IPK: 3.58/4.00</span>
                                    <p class="text-muted small mb-0">Aug 2021 - Aug 2025</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-muted mb-0">Fokus pada Programming (Python, Java, PHP, Flutter), AI & Machine Learning, SDLC, UI/UX Design, Business Process & ERP, dan Software Testing.</p>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="edu-card bg-white rounded-4 shadow-sm p-4 p-lg-5 h-100 hover-lift">
                    <div class="d-flex align-items-start mb-4">
                        <div class="edu-icon bg-success bg-opacity-10 rounded-3 p-3 me-3">
                            <i class="fas fa-school text-success fs-3"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start flex-wrap gap-2 mb-2">
                                <div>
                                    <h5 class="fw-bold mb-1">SMA IPA</h5>
                                    <h6 class="text-success mb-1">SMA Negeri 3 Samarinda</h6>
                                    <p class="text-muted small mb-0">
                                        <i class="fas fa-map-marker-alt me-2"></i>Samarinda, Kalimantan Timur
                                    </p>
                                </div>
                                <div class="text-end">
                                    <p class="text-muted small mb-0">Apr 2018 - Jun 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-muted mb-0">Anggota OSIS bidang dokumentasi dan publikasi, aktif dalam program ekstrakurikuler sains, dengan fokus pada matematika dan fisika.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Organization Section -->
<section id="organization" class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="text-primary fw-semibold text-uppercase letter-spacing-1">Organisasi</span>
            <h2 class="display-5 fw-bold mt-2 mb-3">Pengalaman Organisasi</h2>
            <p class="lead text-muted">Keterlibatan dalam organisasi dan kegiatan kemahasiswaan</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="org-card bg-white rounded-4 shadow-sm p-4 p-lg-5 h-100 hover-lift">
                    <div class="org-header mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <div class="org-icon bg-primary bg-opacity-10 rounded-3 p-3 me-3">
                                <i class="fas fa-hands-helping text-primary fs-4"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fw-bold mb-2">Expert Staff Bureau of Community Dedication</h5>
                                <h6 class="text-primary mb-2">Himpunan Mahasiswa Sistem Informasi Telkom University</h6>
                                <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3 py-1">Aug 2023 - Jan 2025</span>
                            </div>
                        </div>
                    </div>
                    <ul class="custom-list mb-0">
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-primary me-2"></i>
                            Mengorganisir inisiatif sosial seperti donor darah dan donasi panti asuhan
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-primary me-2"></i>
                            Berkolaborasi dalam koordinasi logistik, budgeting, dan komunikasi eksternal
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-primary me-2"></i>
                            Memfasilitasi workshop kreatif untuk anak jalanan
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="org-card bg-white rounded-4 shadow-sm p-4 p-lg-5 h-100 hover-lift">
                    <div class="org-header mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <div class="org-icon bg-success bg-opacity-10 rounded-3 p-3 me-3">
                                <i class="fas fa-camera text-success fs-4"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fw-bold mb-2">Publication and Documentation</h5>
                                <h6 class="text-success mb-2">CYVERO</h6>
                                <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-1">Jun 2023 - Dec 2023</span>
                            </div>
                        </div>
                    </div>
                    <ul class="custom-list mb-0">
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Dokumentasi event melalui fotografi dan videografi
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Editing after-movie untuk meningkatkan visibilitas event
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Mendesain dan mengelola konten Instagram
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Kolaborasi dengan tim kreatif untuk visual storytelling
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section-padding position-relative overflow-hidden" style="background: linear-gradient(135deg, #1e88e5 0%, #1565c0 100%);">
    <div class="contact-pattern"></div>
    <div class="container position-relative" style="z-index: 2;">
        <div class="text-center mb-5 text-white" data-aos="fade-up">
            <span class="fw-semibold text-uppercase letter-spacing-1" style="color: rgba(255,255,255,0.9);">Kontak</span>
            <h2 class="display-5 fw-bold mt-2 mb-3">Hubungi Saya</h2>
            <p class="lead" style="color: rgba(255,255,255,0.9);">Mari diskusikan peluang kolaborasi untuk proyek systems analyst atau quality assurance</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-5" data-aos="fade-right">
                <div class="contact-info">
                    <div class="info-item contact-card backdrop-blur rounded-4 p-4 mb-3 hover-lift">
                        <div class="d-flex align-items-center text-white">
                            <div class="icon-box-large bg-white bg-opacity-20 rounded-3 p-3 me-3">
                                <i class="fas fa-envelope fs-4"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1" style="color: rgba(255,255,255,0.9);">Email</h6>
                                <p class="mb-0 fw-semibold">inuriadi73@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="info-item contact-card backdrop-blur rounded-4 p-4 mb-3 hover-lift">
                        <div class="d-flex align-items-center text-white">
                            <div class="icon-box-large bg-white bg-opacity-20 rounded-3 p-3 me-3">
                                <i class="fas fa-phone fs-4"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1" style="color: rgba(255,255,255,0.9);">Telepon</h6>
                                <p class="mb-0 fw-semibold">081224249920</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="info-item contact-card backdrop-blur rounded-4 p-4 mb-3 hover-lift">
                        <div class="d-flex align-items-center text-white">
                            <div class="icon-box-large bg-white bg-opacity-20 rounded-3 p-3 me-3">
                                <i class="fas fa-map-marker-alt fs-4"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1" style="color: rgba(255,255,255,0.9);">Lokasi</h6>
                                <p class="mb-0 fw-semibold">Bandung, Jawa Barat, Indonesia</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="info-item contact-card backdrop-blur rounded-4 p-4 hover-lift">
                        <div class="d-flex align-items-center text-white">
                            <div class="icon-box-large bg-white bg-opacity-20 rounded-3 p-3 me-3">
                                <i class="fab fa-linkedin fs-4"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1" style="color: rgba(255,255,255,0.9);">LinkedIn</h6>
                                <a href="https://www.linkedin.com/in/iqmal-nuriadi-007156197/" target="_blank" class="text-white text-decoration-none fw-semibold d-flex align-items-center">
                                    LinkedIn Profile <i class="fas fa-external-link-alt ms-2 small"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-7" data-aos="fade-left">
                <div class="contact-form-wrapper rounded-4 shadow-lg p-4 p-lg-5">
                    @if(session('success'))
                        <div class="alert alert-success rounded-3 d-flex align-items-center mb-4">
                            <i class="fas fa-check-circle me-2"></i>
                            {{ session('success') }}
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger rounded-3 d-flex align-items-center mb-4">
                            <i class="fas fa-exclamation-circle me-2"></i>
                            {{ session('error') }}
                        </div>
                    @endif
                    
                    <form action="{{ route('contact.send', [], false) }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="nama" class="form-label fw-semibold text-muted small text-uppercase" style="letter-spacing: 0.5px;">Nama Anda</label>
                            <input type="text" name="nama" id="nama" class="form-control form-control-lg rounded-3 border-2" placeholder="John Doe" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label fw-semibold text-muted small text-uppercase" style="letter-spacing: 0.5px;">Email Anda</label>
                            <input type="email" name="email" id="email" class="form-control form-control-lg rounded-3 border-2" placeholder="john@example.com" required>
                        </div>
                        <div class="mb-4">
                            <label for="subjek" class="form-label fw-semibold text-muted small text-uppercase" style="letter-spacing: 0.5px;">Subjek</label>
                            <input type="text" name="subjek" id="subjek" class="form-control form-control-lg rounded-3 border-2" placeholder="Topik Pesan" required>
                        </div>
                        <div class="mb-4">
                            <label for="pesan" class="form-label fw-semibold text-muted small text-uppercase" style="letter-spacing: 0.5px;">Pesan Anda</label>
                            <textarea name="pesan" id="pesan" class="form-control rounded-3 border-2" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill hover-lift">
                            <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional CSS -->
<style>
:root {
    --primary-color: #1e88e5;
    --secondary-color: #1565c0;
    --success-color: #06d6a0;
    --danger-color: #ef476f;
    --dark-color: #1a1a2e;
    --light-color: #f8f9fa;
    --page-bg: #e8f1ff;
    --section-bg: #dbeafe;
    --card-bg: #f7fbff;
}

.section-padding {
    padding: 100px 0;
}

/* Hero Section */
.hero-section {
    background: linear-gradient(135deg, #1e88e5 0%, #1565c0 100%);
    color: white;
    position: relative;
    overflow: hidden;
}

.hero-gradient {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        radial-gradient(circle at 20% 50%, rgba(255,255,255,0.15) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(255,255,255,0.15) 0%, transparent 50%);
}

.hero-particles {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: 
        radial-gradient(2px 2px at 20% 30%, rgba(255,255,255,0.3), transparent),
        radial-gradient(2px 2px at 60% 70%, rgba(255,255,255,0.3), transparent),
        radial-gradient(1px 1px at 50% 50%, rgba(255,255,255,0.3), transparent),
        radial-gradient(1px 1px at 80% 10%, rgba(255,255,255,0.3), transparent),
        radial-gradient(2px 2px at 90% 60%, rgba(255,255,255,0.3), transparent);
    background-size: 200% 200%;
    background-position: 50% 50%;
    animation: particles 20s ease-in-out infinite;
}

@keyframes particles {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

.hero-title {
    text-shadow: 2px 4px 8px rgba(0,0,0,0.2);
}

.gradient-text-hero {
    background: linear-gradient(135deg, #ffffff 0%, #f0f0f0 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-shadow: none;
    filter: drop-shadow(2px 4px 6px rgba(0,0,0,0.2));
}

.hero-subtitle {
    text-shadow: 1px 2px 4px rgba(0,0,0,0.1);
}

/* Readability */
body {
    font-size: 1.12rem;
    background: var(--page-bg);
}

p,
.text-muted,
.custom-list li,
.info-list small,
.card-text {
    font-size: 1.08rem;
}

.lead {
    font-size: 1.28rem;
}

h1, h2, h3, h4, h5, h6 {
    letter-spacing: 0.2px;
}

/* Social Icons */
.social-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 45px;
    height: 45px;
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(10px);
    border-radius: 50%;
    color: white;
    text-decoration: none;
    font-size: 1.2rem;
    transition: all 0.3s ease;
    border: 2px solid rgba(255,255,255,0.2);
}

.social-icon:hover {
    background: white;
    color: var(--primary-color);
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

/* Scroll Indicator */
.scroll-indicator {
    position: absolute;
    bottom: 40px;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
    z-index: 10;
}

.mouse {
    width: 30px;
    height: 50px;
    border: 2px solid rgba(255,255,255,0.5);
    border-radius: 20px;
    position: relative;
    margin: 0 auto;
}

.mouse::before {
    content: '';
    width: 6px;
    height: 6px;
    background: white;
    border-radius: 50%;
    position: absolute;
    top: 10px;
    left: 50%;
    transform: translateX(-50%);
    animation: scroll 2s infinite;
}

@keyframes scroll {
    0% { top: 10px; opacity: 1; }
    100% { top: 30px; opacity: 0; }
}

/* Profile Image - Larger */
.profile-image-wrapper-large {
    position: relative;
    z-index: 1;
}

.profile-circle-large {
    position: absolute;
    width: 500px;
    height: 500px;
    border-radius: 50%;
    background: linear-gradient(135deg, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0.05) 100%);
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    animation: pulse-large 4s ease-in-out infinite;
    border: 2px solid rgba(255,255,255,0.1);
}

.profile-circle-secondary {
    position: absolute;
    width: 420px;
    height: 420px;
    border-radius: 50%;
    border: 2px dashed rgba(255,255,255,0.2);
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    animation: rotate 30s linear infinite;
}

@keyframes pulse-large {
    0%, 100% { transform: translate(-50%, -50%) scale(1); }
    50% { transform: translate(-50%, -50%) scale(1.05); }
}

@keyframes rotate {
    from { transform: translate(-50%, -50%) rotate(0deg); }
    to { transform: translate(-50%, -50%) rotate(360deg); }
}

.profile-image-container-large {
    position: relative;
    width: 400px;
    height: 400px;
    border-radius: 50%;
    overflow: hidden;
    border: 6px solid rgba(255,255,255,0.3);
    box-shadow: 0 20px 60px rgba(0,0,0,0.3);
}

.profile-image-large {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.profile-image-container-large:hover .profile-image-large {
    transform: scale(1.05);
}

.floating-badge-large {
    position: absolute;
    width: 80px;
    height: 80px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 15px 40px rgba(0,0,0,0.25);
    animation: float 3s ease-in-out infinite;
    border: 3px solid rgba(102, 126, 234, 0.2);
    transition: all 0.3s ease;
}

.floating-badge-large:hover {
    transform: translateY(-5px) scale(1.1);
    box-shadow: 0 20px 50px rgba(0,0,0,0.3);
}

.floating-badge-large.badge-1 {
    top: 5%;
    right: 0;
    animation-delay: 0s;
}

.floating-badge-large.badge-2 {
    bottom: 25%;
    right: -10px;
    animation-delay: 1s;
}

.floating-badge-large.badge-3 {
    bottom: 5%;
    left: 0;
    animation-delay: 2s;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

/* Hover Effects */
.hover-lift {
    transition: all 0.3s ease;
}

.hover-lift:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.15) !important;
}

/* Buttons */
.btn {
    transition: all 0.3s ease;
    font-weight: 600;
}

.btn-primary {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
    border: none;
}

.btn-primary:hover {
    background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%);
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
}

.btn-outline-primary {
    border: 2px solid white;
    color: white;
}

.btn-outline-primary:hover {
    background: white;
    color: var(--primary-color);
}

/* Cards */
.stat-card, .info-card, .experience-card, .skills-card, 
.cert-card, .publication-card, .edu-card, .org-card {
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.05);
}

/* Badges */
.tech-badge {
    display: inline-block;
    padding: 8px 16px;
    background: var(--light-color);
    border-radius: 20px;
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--dark-color);
    transition: all 0.3s ease;
}

.tech-badge:hover {
    background: var(--primary-color);
    color: white;
    transform: translateY(-2px);
}

.tech-badge-modern {
    display: inline-flex;
    align-items: center;
    padding: 10px 20px;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-radius: 25px;
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--dark-color);
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.tech-badge-modern:hover {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
    color: white;
    transform: translateY(-2px);
    border-color: var(--primary-color);
}

/* Icon Boxes */
.icon-box, .icon-box-large {
    transition: all 0.3s ease;
}

.skill-item {
    text-align: center;
    transition: all 0.3s ease;
}

.skill-item:hover {
    background: var(--primary-color) !important;
    color: white;
    transform: translateY(-5px);
}

.skill-item:hover i {
    color: white !important;
}

/* Custom List */
.custom-list {
    list-style: none;
    padding-left: 0;
}

.custom-list li {
    padding-left: 0;
    line-height: 1.8;
    color: #6c757d;
}

/* Letter Spacing */
.letter-spacing-1 {
    letter-spacing: 1px;
}

/* Contact Pattern */
.contact-pattern {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: 
        radial-gradient(circle at 20% 30%, rgba(255,255,255,0.1) 0%, transparent 50%),
        radial-gradient(circle at 80% 70%, rgba(255,255,255,0.1) 0%, transparent 50%);
    opacity: 0.5;
}

.contact-card {
    background: rgba(255, 255, 255, 0.16);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.contact-card .icon-box-large {
    background: rgba(255, 255, 255, 0.9) !important;
    border: 1px solid rgba(255, 255, 255, 0.85);
}

.contact-card .icon-box-large i {
    color: var(--primary-color);
}

.contact-form-wrapper {
    background: #f2f6ff;
    border: 1px solid rgba(255, 255, 255, 0.6);
}

.backdrop-blur {
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}

/* Form Controls */
.form-control:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.15);
}

/* Responsive */
@media (max-width: 768px) {
    .section-padding {
        padding: 60px 0;
    }
    
    .display-3 {
        font-size: 2.5rem;
    }
    
    .display-5 {
        font-size: 2rem;
    }
    
    .hero-title {
        font-size: 2.5rem !important;
    }
    
    .hero-subtitle {
        font-size: 1.1rem !important;
    }

    body {
        font-size: 1.02rem;
    }
    
    .lead {
        font-size: 1.16rem;
    }
    
    .profile-image-container-large {
        width: 280px;
        height: 280px;
    }
    
    .profile-circle-large {
        width: 330px;
        height: 330px;
    }
    
    .profile-circle-secondary {
        width: 300px;
        height: 300px;
    }
    
    .floating-badge-large {
        width: 60px;
        height: 60px;
    }
    
    .floating-badge-large i {
        font-size: 1.2rem !important;
    }
    
    .scroll-indicator {
        display: none;
    }
    
    .social-icon {
        width: 40px;
        height: 40px;
        font-size: 1rem;
    }
}

@media (min-width: 769px) and (max-width: 1024px) {
    .profile-image-container-large {
        width: 320px;
        height: 320px;
    }
    
    .profile-circle-large {
        width: 380px;
        height: 380px;
    }
    
    .profile-circle-secondary {
        width: 340px;
        height: 340px;
    }
}

/* Smooth Scrolling */
html {
    scroll-behavior: smooth;
}

/* Selection */
::selection {
    background: var(--primary-color);
    color: white;
}

/* Blue background treatment */
.bg-light {
    background-color: var(--section-bg) !important;
}

.bg-white {
    background-color: var(--card-bg) !important;
}
</style>

<!-- Animation on Scroll Script -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script>
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        offset: 100
    });
</script>
@endsection
