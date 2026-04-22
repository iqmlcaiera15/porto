@extends('layouts.app')

@section('title', 'Portfolio - Iqmal Nuriadi | Systems Analyst & QA Specialist')

@section('content')
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top glass-nav">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
            <span style="background: linear-gradient(135deg, #1e88e5 0%, #6366f1 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-size: 1.3rem;">
                <i class="fas fa-briefcase me-1" style="color: #1e88e5;"></i> Portfolio
            </span>
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="#experience">Pengalaman</a></li>
                <li class="nav-item"><a class="nav-link" href="#skills">Keahlian</a></li>
                <li class="nav-item"><a class="nav-link" href="#certifications">Sertifikasi</a></li>
                <li class="nav-item"><a class="nav-link" href="#publications">Penelitian</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
                <li class="nav-item"><a class="nav-link" href="#languages">Bahasa</a></li>
                <li class="nav-item"><a class="nav-link" href="#achievements">Pencapaian</a></li>
                <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
                <li class="nav-item"><a class="nav-link" href="#interests">Minat</a></li>
                <li class="nav-item"><a class="nav-link" href="#education">Pendidikan</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section id="home" class="hero-section position-relative overflow-hidden">
    <div class="hero-gradient"></div>
    <div class="hero-particles"></div>
    <div class="hero-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
    </div>
    <div class="container-fluid px-lg-5 position-relative" style="z-index: 2;">
        <div class="row align-items-center" style="min-height: 100vh; padding: 120px 0;">
            <div class="col-lg-6 mb-5 mb-lg-0 ps-lg-5">
                <div class="hero-content" data-aos="fade-right">
                    <div class="hero-badge mb-4">
                        <span class="badge-pill">
                            <i class="fas fa-rocket me-2"></i>Mencari Peluang Karir
                        </span>
                    </div>
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
<section id="about" class="section-padding" style="background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6" data-aos="fade-up">
                <div class="section-header mb-4">
                    <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-4 py-2 mb-3 fw-semibold">
                        <i class="fas fa-user me-2"></i>Tentang Saya
                    </span>
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
                        <div class="stat-card bg-white rounded-4 p-4 shadow-sm hover-lift h-100 border-0">
                            <div class="d-flex align-items-center mb-2">
                                <div class="icon-box bg-primary bg-opacity-10 rounded-3 p-2 me-3">
                                    <i class="fas fa-graduation-cap text-primary"></i>
                                </div>
                            </div>
                            <h3 class="fw-bold mb-1" style="color: var(--primary-color);">3.58<span class="text-muted fs-5">/4.00</span></h3>
                            <p class="text-muted small mb-0">IPK Universitas</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-card bg-white rounded-4 p-4 shadow-sm hover-lift h-100 border-0">
                            <div class="d-flex align-items-center mb-2">
                                <div class="icon-box bg-success bg-opacity-10 rounded-3 p-2 me-3">
                                    <i class="fas fa-briefcase text-success"></i>
                                </div>
                            </div>
                            <h3 class="fw-bold mb-1" style="color: var(--success-color);">{{ $qaMonths }}<span class="text-muted fs-5"> Bulan</span></h3>
                            <p class="text-muted small mb-0">Pengalaman QA</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="info-card bg-white rounded-4 shadow-sm p-4 p-lg-5 h-100 border-0">
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-box-large bg-primary bg-opacity-10 rounded-3 p-3 me-3">
                            <i class="fas fa-id-card text-primary fs-4"></i>
                        </div>
                        <h4 class="fw-bold mb-0">Informasi Personal</h4>
                    </div>
                    
                    <ul class="list-unstyled info-list">
                        <li class="mb-3 pb-3 border-bottom">
                            <div class="d-flex align-items-center">
                                <div class="info-icon bg-primary bg-opacity-10 rounded-2 p-2 me-3">
                                    <i class="fas fa-id-card text-primary"></i>
                                </div>
                                <div>
                                    <small class="text-muted d-block">Nama</small>
                                    <strong>Iqmal Nuriadi</strong>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 pb-3 border-bottom">
                            <div class="d-flex align-items-center">
                                <div class="info-icon bg-primary bg-opacity-10 rounded-2 p-2 me-3">
                                    <i class="fas fa-envelope text-primary"></i>
                                </div>
                                <div>
                                    <small class="text-muted d-block">Email</small>
                                    <strong>inuriadi73@gmail.com</strong>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 pb-3 border-bottom">
                            <div class="d-flex align-items-center">
                                <div class="info-icon bg-primary bg-opacity-10 rounded-2 p-2 me-3">
                                    <i class="fas fa-phone text-primary"></i>
                                </div>
                                <div>
                                    <small class="text-muted d-block">Telepon</small>
                                    <strong>081224249920</strong>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 pb-3 border-bottom">
                            <div class="d-flex align-items-center">
                                <div class="info-icon bg-primary bg-opacity-10 rounded-2 p-2 me-3">
                                    <i class="fas fa-map-marker-alt text-primary"></i>
                                </div>
                                <div>
                                    <small class="text-muted d-block">Lokasi</small>
                                    <strong>Bandung, Jawa Barat</strong>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 pb-3 border-bottom">
                            <div class="d-flex align-items-center">
                                <div class="info-icon bg-primary bg-opacity-10 rounded-2 p-2 me-3">
                                    <i class="fab fa-linkedin text-primary"></i>
                                </div>
                                <div>
                                    <small class="text-muted d-block">LinkedIn</small>
                                    <a href="https://www.linkedin.com/in/iqmal-nuriadi-007156197/" target="_blank" class="text-decoration-none fw-semibold">LinkedIn Profile</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <div class="info-icon bg-success bg-opacity-10 rounded-2 p-2 me-3">
                                    <i class="fas fa-circle-notch text-success"></i>
                                </div>
                                <div>
                                    <small class="text-muted d-block">Status</small>
                                    <strong class="text-success">Mencari Peluang Karir</strong>
                                </div>
                            </div>
                        </li>
                    </ul>
                    
                    <a href="https://porto-bucket-php.s3.ap-southeast-2.amazonaws.com/Iqmal+Nuriadi-CV.pdf" class="btn btn-primary w-100 rounded-pill mt-4 hover-lift" style="background: var(--gradient-primary); border: none;">
                        <i class="fas fa-download me-2"></i>Download CV
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section id="experience" class="section-padding" style="background: linear-gradient(180deg, #f8fafc 0%, #e2e8f0 100%);">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-4 py-2 mb-3 fw-semibold">
                <i class="fas fa-briefcase me-2"></i>Pengalaman
            </span>
            <h2 class="display-5 fw-bold mt-2 mb-3">Pengalaman Kerja</h2>
            <p class="lead text-muted mx-auto" style="max-width: 600px;">Pengalaman profesional dalam bidang Quality Assurance dan Software Testing</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
                <div class="experience-card bg-white rounded-4 shadow-sm p-4 p-lg-5 position-relative border-0">
                    <div class="exp-timeline">
                        <div class="timeline-dot"></div>
                    </div>
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
                            <h4 class="fw-bold mb-2" style="color: var(--primary-color);">Quality Assurance Specialist Intern</h4>
                            <h5 class="fw-bold mb-1">PT. Surya Madistrindo</h5>
                            <p class="text-muted mb-0">
                                <i class="fas fa-map-marker-alt me-2"></i>Jakarta Pusat, Jakarta
                            </p>
                        </div>
                    </div>
                    
                    <div class="responsibilities mt-4">
                        <h6 class="fw-semibold mb-3 text-uppercase" style="font-size: 0.875rem; letter-spacing: 0.5px; color: var(--primary-color);">
                            <i class="fas fa-tasks me-2"></i>Key Responsibilities
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
                <div class="experience-card bg-white rounded-4 shadow-sm p-4 p-lg-5 position-relative border-0">
                    <div class="exp-timeline">
                        <div class="timeline-dot timeline-dot-active"></div>
                    </div>
                    <div class="experience-badge position-absolute top-0 end-0 m-4">
                        <span class="badge bg-success rounded-pill px-3 py-2">
                            <i class="fas fa-calendar-alt me-2"></i>Okt 2025 - Sekarang
                        </span>
                    </div>
                    
                    <div class="d-flex align-items-start mb-4">
                        <div class="company-logo bg-success bg-opacity-10 rounded-3 p-3 me-4">
                            <i class="fas fa-building text-success fs-3"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-2" style="color: var(--success-color);">Quality Assurance Specialist Intern</h4>
                            <h5 class="fw-bold mb-1">PT. Neuronworks Indonesia</h5>
                            <p class="text-muted mb-0">
                                <i class="fas fa-map-marker-alt me-2"></i>Bandung, Jawa Barat
                            </p>
                        </div>
                    </div>
                    
                    <div class="responsibilities mt-4">
                        <h6 class="fw-semibold mb-3 text-uppercase" style="font-size: 0.875rem; letter-spacing: 0.5px; color: var(--success-color);">
                            <i class="fas fa-tasks me-2"></i>Key Responsibilities
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
<section id="skills" class="section-padding" style="background: linear-gradient(180deg, #f8fafc 0%, #e2e8f0 100%);">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-4 py-2 mb-3 fw-semibold">
                <i class="fas fa-star me-2"></i>Keahlian
            </span>
            <h2 class="display-5 fw-bold mt-2 mb-3">Keahlian & Kompetensi</h2>
            <p class="lead text-muted mx-auto" style="max-width: 600px;">Teknologi, tools, dan soft skills yang saya kuasai untuk mendukung pekerjaan sebagai QA & System Analyst</p>
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
                            <div class="skill-item bg-light rounded-3 p-3 hover-lift text-center">
                                <div class="skill-icon mb-2">
                                    <i class="fab fa-php text-primary fs-4"></i>
                                </div>
                                <p class="mb-0 fw-semibold">PHP</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="skill-item bg-light rounded-3 p-3 hover-lift text-center">
                                <div class="skill-icon mb-2">
                                    <i class="fab fa-python text-primary fs-4"></i>
                                </div>
                                <p class="mb-0 fw-semibold">Python</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="skill-item bg-light rounded-3 p-3 hover-lift text-center">
                                <div class="skill-icon mb-2">
                                    <i class="fas fa-database text-primary fs-4"></i>
                                </div>
                                <p class="mb-0 fw-semibold">SQL</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="skill-item bg-light rounded-3 p-3 hover-lift text-center">
                                <div class="skill-icon mb-2">
                                    <i class="fas fa-brain text-primary fs-4"></i>
                                </div>
                                <p class="mb-0 fw-semibold">Machine Learning</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="skill-item bg-light rounded-3 p-3 hover-lift text-center">
                                <div class="skill-icon mb-2">
                                    <i class="fas fa-sitemap text-primary fs-4"></i>
                                </div>
                                <p class="mb-0 fw-semibold">UML</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="skill-item bg-light rounded-3 p-3 hover-lift text-center">
                                <div class="skill-icon mb-2">
                                    <i class="fab fa-jira text-primary fs-4"></i>
                                </div>
                                <p class="mb-0 fw-semibold">Jira</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="skill-item bg-light rounded-3 p-3 hover-lift text-center">
                                <div class="skill-icon mb-2">
                                    <i class="fas fa-bug text-primary fs-4"></i>
                                </div>
                                <p class="mb-0 fw-semibold">Software Testing</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="skill-item bg-light rounded-3 p-3 hover-lift text-center">
                                <div class="skill-icon mb-2">
                                    <i class="fas fa-paint-brush text-primary fs-4"></i>
                                </div>
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
<section id="certifications" class="section-padding" style="background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-4 py-2 mb-3 fw-semibold">
                <i class="fas fa-certificate me-2"></i>Kredensial
            </span>
            <h2 class="display-5 fw-bold mt-2 mb-3">Sertifikasi & Pencapaian</h2>
            <p class="lead text-muted mx-auto" style="max-width: 600px;">Sertifikasi profesional dan pencapaian akademik yang telah saya raih</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="cert-card bg-white rounded-4 shadow-sm p-4 p-lg-5 h-100 hover-lift border-0">
                    <div class="cert-glow"></div>
                    <div class="d-flex align-items-start mb-4">
                        <div class="cert-icon bg-primary bg-opacity-10 rounded-3 p-3 me-3">
                            <i class="fas fa-shield-alt text-primary fs-2"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="fw-bold mb-0">Fortinet Certified Fundamentals in Cybersecurity</h5>
                            </div>
                            <span class="badge bg-primary rounded-pill px-3 py-1 mb-3">2024</span>
                        </div>
                    </div>
                    <p class="text-muted mb-0">Pengetahuan dasar cybersecurity termasuk network security, threat landscape, secure access, dan konfigurasi firewall.</p>
                    <div class="mt-3">
                        <span class="tech-badge-modern">Network Security</span>
                        <span class="tech-badge-modern">Threat Analysis</span>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="cert-card bg-white rounded-4 shadow-sm p-4 p-lg-5 h-100 hover-lift border-0">
                    <div class="cert-glow cert-glow-success"></div>
                    <div class="d-flex align-items-start mb-4">
                        <div class="cert-icon bg-success bg-opacity-10 rounded-3 p-3 me-3">
                            <i class="fas fa-chart-line text-success fs-2"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="fw-bold mb-0">Certified System Analyst</h5>
                            </div>
                            <span class="badge bg-success rounded-pill px-3 py-1 mb-3">2024</span>
                        </div>
                    </div>
                    <p class="text-muted mb-0">Konsep analisis sistem menggunakan UML dan analisis proses bisnis, termasuk pembuatan use case diagrams dan activity diagrams.</p>
                    <div class="mt-3">
                        <span class="tech-badge-modern">UML</span>
                        <span class="tech-badge-modern">Business Analysis</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Publications Section -->
<section id="publications" class="section-padding" style="background: linear-gradient(180deg, #f8fafc 0%, #e2e8f0 100%);">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge bg-secondary bg-opacity-10 text-secondary rounded-pill px-4 py-2 mb-3 fw-semibold">
                <i class="fas fa-book me-2"></i>Penelitian
            </span>
            <h2 class="display-5 fw-bold mt-2 mb-3">Publikasi Penelitian</h2>
            <p class="lead text-muted mx-auto" style="max-width: 600px;">Kontribusi dalam penelitian dan publikasi ilmiah</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
                <div class="publication-card bg-white rounded-4 shadow-sm p-4 p-lg-5 border-0">
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
<section id="education" class="section-padding" style="background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge bg-info bg-opacity-10 text-info rounded-pill px-4 py-2 mb-3 fw-semibold">
                <i class="fas fa-graduation-cap me-2"></i>Pendidikan
            </span>
            <h2 class="display-5 fw-bold mt-2 mb-3">Riwayat Pendidikan</h2>
            <p class="lead text-muted mx-auto" style="max-width: 600px;">Riwayat pendidikan formal yang telah ditempuh</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="edu-card bg-white rounded-4 shadow-sm p-4 p-lg-5 h-100 hover-lift border-0">
                    <div class="edu-glow"></div>
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
                <div class="edu-card bg-white rounded-4 shadow-sm p-4 p-lg-5 h-100 hover-lift border-0">
                    <div class="edu-glow edu-glow-success"></div>
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
<section id="organization" class="section-padding" style="background: linear-gradient(180deg, #f8fafc 0%, #e2e8f0 100%);">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge bg-warning bg-opacity-10 text-warning rounded-pill px-4 py-2 mb-3 fw-semibold">
                <i class="fas fa-users me-2"></i>Organisasi
            </span>
            <h2 class="display-5 fw-bold mt-2 mb-3">Pengalaman Organisasi</h2>
            <p class="lead text-muted mx-auto" style="max-width: 600px;">Keterlibatan dalam organisasi dan kegiatan kemahasiswaan</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="org-card bg-white rounded-4 shadow-sm p-4 p-lg-5 h-100 hover-lift border-0">
                    <div class="org-glow"></div>
                    <div class="org-header mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <div class="org-icon bg-primary bg-opacity-10 rounded-3 p-3 me-3">
                                <i class="fas fa-hands-helping text-primary fs-4"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fw-bold mb-2">Expert Staff Bureau of Community Dedication</h5>
                                <h6 class="text-primary mb-2">Himpunan Mahasiswa Sistem Informasi Telkom University</h6>
                                <span class="badge bg-primary rounded-pill px-3 py-1">Aug 2023 - Jan 2025</span>
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
                <div class="org-card bg-white rounded-4 shadow-sm p-4 p-lg-5 h-100 hover-lift border-0">
                    <div class="org-glow org-glow-warning"></div>
                    <div class="org-header mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <div class="org-icon bg-success bg-opacity-10 rounded-3 p-3 me-3">
                                <i class="fas fa-camera text-success fs-4"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fw-bold mb-2">Publication and Documentation</h5>
                                <h6 class="text-success mb-2">CYVERO</h6>
                                <span class="badge bg-success rounded-pill px-3 py-1">Jun 2023 - Dec 2023</span>
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

<!-- Stats Counter Section -->
<section class="section-padding" style="background: var(--gradient-primary);">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-counter">
                    <div class="counter-number fw-bold display-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">10+</div>
                    <p class="mb-0" style="color: #ffffff; opacity: 1; font-weight: 500;">Test Cases Created</p>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-counter">
                    <div class="counter-number fw-bold display-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">5+</div>
                    <p class="mb-0" style="color: #ffffff; opacity: 1; font-weight: 500;">Projects Tested</p>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-counter">
                    <div class="counter-number fw-bold display-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">100%</div>
                    <p class="mb-0" style="color: #ffffff; opacity: 1; font-weight: 500;">Bug Detection Rate</p>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="stat-counter">
                    <div class="counter-number fw-bold display-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">2</div>
                    <p class="mb-0" style="color: #ffffff; opacity: 1; font-weight: 500;">Companies</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="section-padding" style="background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge bg-info bg-opacity-10 text-info rounded-pill px-4 py-2 mb-3 fw-semibold">
                <i class="fas fa-concierge-bell me-2"></i>Layanan
            </span>
            <h2 class="display-5 fw-bold mt-2 mb-3">Layanan yang Ditawarkan</h2>
            <p class="lead text-muted mx-auto" style="max-width: 600px;">Solusi profesional untuk mendukung kebutuhan bisnis Anda</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card bg-white rounded-4 shadow-sm p-4 p-lg-5 h-100 hover-lift border-0">
                    <div class="service-icon bg-primary bg-opacity-10 rounded-3 p-4 mb-4 text-center">
                        <i class="fas fa-bug text-primary fs-2"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Software Testing</h4>
                    <p class="text-muted mb-0">Pengujian manual pada aplikasi web dan mobile untuk menemukan defect, inkonsistensi UI/UX, dan memastikan kualitas perangkat lunak.</p>
                </div>
            </div>
            
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card bg-white rounded-4 shadow-sm p-4 p-lg-5 h-100 hover-lift border-0">
                    <div class="service-icon bg-success bg-opacity-10 rounded-3 p-4 mb-4 text-center">
                        <i class="fas fa-robot text-success fs-2"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Automation QA</h4>
                    <p class="text-muted mb-0">Pengembangan script automation testing menggunakan Selenium dan Cypress untuk mempercepat regression testing dan meningkatkan coverage pengujian.</p>
                </div>
            </div>
            
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card bg-white rounded-4 shadow-sm p-4 p-lg-5 h-100 hover-lift border-0">
                    <div class="service-icon bg-warning bg-opacity-10 rounded-3 p-4 mb-4 text-center">
                        <i class="fas fa-pencil-ruler text-warning fs-2"></i>
                    </div>
                    <h4 class="fw-bold mb-3">UI/UX Design</h4>
                    <p class="text-muted mb-0">Desain antarmuka pengguna yang intuitif dan pengalaman pengguna yang optimal untuk meningkatkan kepuasan pengguna.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Language Proficiency Section -->
<section id="languages" class="section-padding" style="background: linear-gradient(180deg, #f8fafc 0%, #e2e8f0 100%);">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge bg-secondary bg-opacity-10 text-secondary rounded-pill px-4 py-2 mb-3 fw-semibold">
                <i class="fas fa-language me-2"></i>Bahasa
            </span>
            <h2 class="display-5 fw-bold mt-2 mb-3">Kemampuan Bahasa</h2>
            <p class="lead text-muted mx-auto" style="max-width: 600px;">Kemampuan bahasa yang dikuasai untuk mendukung komunikasi profesional</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                <div class="language-card bg-white rounded-4 shadow-sm p-4 p-lg-5 border-0">
                    <div class="d-flex align-items-center mb-4">
                        <div class="language-flag me-3">
                            <span class="fs-1">🇮🇩</span>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fw-bold mb-1">Bahasa Indonesia</h5>
                            <p class="text-muted mb-0">Native</p>
                        </div>
                        <div class="language-level">
                            <span class="badge bg-success rounded-pill px-3 py-2">Native</span>
                        </div>
                    </div>
                    <div class="progress" style="height: 8px;">
                        <div class="progress-bar bg-success" style="width: 100%;"></div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="200">
                <div class="language-card bg-white rounded-4 shadow-sm p-4 p-lg-5 border-0">
                    <div class="d-flex align-items-center mb-4">
                        <div class="language-flag me-3">
                            <span class="fs-1">🇬🇧</span>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fw-bold mb-1">English</h5>
                            <p class="text-muted mb-0">Professional Working</p>
                        </div>
                        <div class="language-level">
                            <span class="badge bg-primary rounded-pill px-3 py-2">Professional</span>
                        </div>
                    </div>
                    <div class="progress" style="height: 8px;">
                        <div class="progress-bar bg-primary" style="width: 80%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Achievements Section -->
<section id="achievements" class="section-padding" style="background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge bg-warning bg-opacity-10 text-warning rounded-pill px-4 py-2 mb-3 fw-semibold">
                <i class="fas fa-trophy me-2"></i>Pencapaian
            </span>
            <h2 class="display-5 fw-bold mt-2 mb-3">Pencapaian & Awards</h2>
            <p class="lead text-muted mx-auto" style="max-width: 600px;">Penghargaan dan prestasi yang telah diraih</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="achievement-card bg-white rounded-4 shadow-sm p-4 p-lg-5 h-100 hover-lift border-0">
                    <div class="d-flex align-items-start">
                        <div class="achievement-icon bg-warning bg-opacity-10 rounded-3 p-3 me-4">
                            <i class="fas fa-graduation-cap text-warning fs-3"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fw-bold mb-2">Cumlaude</h5>
                            <p class="text-muted mb-2">Universitas Telkom - 2025</p>
                            <p class="text-muted mb-0 small">Lulusan dengan predikat Cumlaude dan IPK 3.58/4.00</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="achievement-card bg-white rounded-4 shadow-sm p-4 p-lg-5 h-100 hover-lift border-0">
                    <div class="d-flex align-items-start">
                        <div class="achievement-icon bg-primary bg-opacity-10 rounded-3 p-3 me-4">
                            <i class="fas fa-medal text-primary fs-3"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fw-bold mb-2">Finalist Top Performer Intern</h5>
                            <p class="text-muted mb-2">PT. Neuronworks Indonesia - 2025</p>
                            <p class="text-muted mb-0 small">Pengakuan atas kinerja terbaik selama magang sebagai QA Specialist</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="achievement-card bg-white rounded-4 shadow-sm p-4 p-lg-5 h-100 hover-lift border-0">
                    <div class="d-flex align-items-start">
                        <div class="achievement-icon bg-success bg-opacity-10 rounded-3 p-3 me-4">
                            <i class="fas fa-certificate text-success fs-3"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fw-bold mb-2">Research Paper</h5>
                            <p class="text-muted mb-2">Internal University - 2025</p>
                            <p class="text-muted mb-0 small">Paper penelitian tentang Machine Learning dalam healthcare</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="achievement-card bg-white rounded-4 shadow-sm p-4 p-lg-5 h-100 hover-lift border-0">
                    <div class="d-flex align-items-start">
                        <div class="achievement-icon bg-info bg-opacity-10 rounded-3 p-3 me-4">
                            <i class="fas fa-users text-info fs-3"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fw-bold mb-2">Active Organization Award</h5>
                            <p class="text-muted mb-2">HMSI Telkom University - 2024</p>
                            <p class="text-muted mb-0 small">Penghargaan atas kontribusi aktif dalam kegiatan organisasi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section id="faq" class="section-padding" style="background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge bg-secondary bg-opacity-10 text-secondary rounded-pill px-4 py-2 mb-3 fw-semibold">
                <i class="fas fa-question-circle me-2"></i>FAQ
            </span>
            <h2 class="display-5 fw-bold mt-2 mb-3">Pertanyaan Umum</h2>
            <p class="lead text-muted mx-auto" style="max-width: 600px;">Jawaban untuk pertanyaan yang sering diajukan</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item border-0 mb-3 rounded-4 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button rounded-4 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                <i class="fas fa-question-circle text-primary me-3"></i>
                                Apa jenis proyek yang pernah Anda uji?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Saya telah menguji berbagai aplikasi termasuk web apps, mobile apps (Android & iOS), dan sistem internal perusahaan. Fokus utama saya adalah pada aplikasi e-commerce, sistem manajemen inventaris, dan aplikasi healthcare.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3 rounded-4 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed rounded-4 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                <i class="fas fa-question-circle text-primary me-3"></i>
                                Tools testing apa yang Anda kuasai?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Saya menggunakan Jira untuk manajemen test case dan pelaporan bug, Postman untuk API testing, Browser DevTools untuk debugging, serta Selenium dasar untuk automation testing. Saya juga familiar dengan MySQL untuk database testing.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3 rounded-4 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed rounded-4 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                <i class="fas fa-question-circle text-primary me-3"></i>
                                Apakah Anda terbuka untuk proyek freelance?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Ya, saya terbuka untuk proyek freelance terutama dalam bidang QA testing, system analysis, dan UI/UX design. Saya fleksibel dengan jarak waktu dan dapat bekerja secara remote maupun onsite sesuai kebutuhan.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3 rounded-4 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed rounded-4 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                <i class="fas fa-question-circle text-primary me-3"></i>
                                Bagaimana cara menghubungi Anda untuk kolaborasi?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Anda dapat menghubungi saya melalui email di inuriadi73@gmail.com, telepon di 081224249920, atau melalui LinkedIn. Saya biasanya merespons dalam waktu 24 jam.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Interests Section -->
<section id="interests" class="section-padding" style="background: linear-gradient(180deg, #f8fafc 0%, #e2e8f0 100%);">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge bg-warning bg-opacity-10 text-warning rounded-pill px-4 py-2 mb-3 fw-semibold">
                <i class="fas fa-heart me-2"></i>Minat
            </span>
            <h2 class="display-5 fw-bold mt-2 mb-3">Minat & Aktivitas</h2>
            <p class="lead text-muted mx-auto" style="max-width: 600px;">Aktivitas di luar pekerjaan yang saya sukai</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <div class="col-lg-10">
                <div class="row g-3">
                    <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="interest-card bg-white rounded-4 p-4 text-center shadow-sm hover-lift border-0">
                            <i class="fas fa-laptop-code text-primary fs-2 mb-3"></i>
                            <h6 class="fw-bold mb-0">Coding</h6>
                        </div>
                    </div>
                    <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="150">
                        <div class="interest-card bg-white rounded-4 p-4 text-center shadow-sm hover-lift border-0">
                            <i class="fas fa-book-reader text-success fs-2 mb-3"></i>
                            <h6 class="fw-bold mb-0">Reading</h6>
                        </div>
                    </div>
                    <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="interest-card bg-white rounded-4 p-4 text-center shadow-sm hover-lift border-0">
                            <i class="fas fa-camera text-warning fs-2 mb-3"></i>
                            <h6 class="fw-bold mb-0">Photography</h6>
                        </div>
                    </div>
                    <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="250">
                        <div class="interest-card bg-white rounded-4 p-4 text-center shadow-sm hover-lift border-0">
                            <i class="fas fa-dumbbell text-danger fs-2 mb-3"></i>
                            <h6 class="fw-bold mb-0">Fitness</h6>
                        </div>
                    </div>
                    <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="interest-card bg-white rounded-4 p-4 text-center shadow-sm hover-lift border-0">
                            <i class="fas fa-music text-info fs-2 mb-3"></i>
                            <h6 class="fw-bold mb-0">Music</h6>
                        </div>
                    </div>
                    <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="350">
                        <div class="interest-card bg-white rounded-4 p-4 text-center shadow-sm hover-lift border-0">
                            <i class="fas fa-plane text-secondary fs-2 mb-3"></i>
                            <h6 class="fw-bold mb-0">Traveling</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section-padding position-relative overflow-hidden" style="background: linear-gradient(135deg, #1e88e5 0%, #6366f1 50%, #8b5cf6 100%);">
    <div class="contact-pattern"></div>
    <div class="contact-shapes">
        <div class="contact-shape shape-1"></div>
        <div class="contact-shape shape-2"></div>
    </div>
    <div class="container position-relative" style="z-index: 2;">
        <div class="text-center mb-5 text-white" data-aos="fade-up">
            <span class="fw-semibold text-uppercase letter-spacing-1" style="color: rgba(255,255,255,0.9);">Kontak</span>
            <h2 class="display-5 fw-bold mt-2 mb-3">Hubungi Saya</h2>
            <p class="lead" style="color: rgba(255,255,255,0.9); max-width: 600px; margin: 0 auto;">Mari diskusikan peluang kolaborasi untuk proyek systems analyst atau quality assurance</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-5" data-aos="fade-right">
                <div class="contact-info">
                    <div class="info-item contact-card backdrop-blur rounded-4 p-4 mb-3 hover-lift border-0">
                        <div class="d-flex align-items-center">
                            <div class="icon-box-large bg-white bg-opacity-20 rounded-3 p-3 me-3">
                                <i class="fas fa-envelope fs-4" style="color: #ffffff;"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1" style="color: #ffffff;">Email</h6>
                                <p class="mb-0 fw-semibold" style="color: #ffffff; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">inuriadi73@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="info-item contact-card backdrop-blur rounded-4 p-4 mb-3 hover-lift border-0">
                        <div class="d-flex align-items-center">
                            <div class="icon-box-large bg-white bg-opacity-20 rounded-3 p-3 me-3">
                                <i class="fas fa-phone fs-4" style="color: #ffffff;"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1" style="color: #ffffff;">Telepon</h6>
                                <p class="mb-0 fw-semibold" style="color: #ffffff; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">081224249920</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="info-item contact-card backdrop-blur rounded-4 p-4 mb-3 hover-lift border-0">
                        <div class="d-flex align-items-center">
                            <div class="icon-box-large bg-white bg-opacity-20 rounded-3 p-3 me-3">
                                <i class="fas fa-map-marker-alt fs-4" style="color: #ffffff;"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1" style="color: #ffffff;">Lokasi</h6>
                                <p class="mb-0 fw-semibold" style="color: #ffffff; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">Bandung, Jawa Barat, Indonesia</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="info-item contact-card backdrop-blur rounded-4 p-4 hover-lift border-0">
                        <div class="d-flex align-items-center">
                            <div class="icon-box-large bg-white bg-opacity-20 rounded-3 p-3 me-3">
                                <i class="fab fa-linkedin fs-4" style="color: #ffffff;"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1" style="color: #ffffff;">LinkedIn</h6>
                                <a href="https://www.linkedin.com/in/iqmal-nuriadi-007156197/" target="_blank" class="text-decoration-none fw-semibold d-flex align-items-center" style="color: #ffffff; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">
                                    LinkedIn Profile <i class="fas fa-external-link-alt ms-2 small"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-7" data-aos="fade-left">
                <div class="contact-form-wrapper rounded-4 shadow-lg p-4 p-lg-5" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(20px);">
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
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="nama" class="form-label fw-semibold text-muted small text-uppercase" style="letter-spacing: 0.5px;">Nama Anda</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0"><i class="fas fa-user text-muted"></i></span>
                                    <input type="text" name="nama" id="nama" class="form-control form-control-lg rounded-3 border-0 bg-light" placeholder="John Doe" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-semibold text-muted small text-uppercase" style="letter-spacing: 0.5px;">Email Anda</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0"><i class="fas fa-envelope text-muted"></i></span>
                                    <input type="email" name="email" id="email" class="form-control form-control-lg rounded-3 border-0 bg-light" placeholder="john@example.com" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 mt-3">
                            <label for="subjek" class="form-label fw-semibold text-muted small text-uppercase" style="letter-spacing: 0.5px;">Subjek</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-0"><i class="fas fa-tag text-muted"></i></span>
                                <input type="text" name="subjek" id="subjek" class="form-control form-control-lg rounded-3 border-0 bg-light" placeholder="Topik Pesan" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="pesan" class="form-label fw-semibold text-muted small text-uppercase" style="letter-spacing: 0.5px;">Pesan Anda</label>
                            <textarea name="pesan" id="pesan" class="form-control rounded-3 border-0 bg-light" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill hover-lift" style="background: var(--gradient-primary); border: none;">
                            <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="py-4" style="background: var(--dark-color);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <p class="mb-0 text-white-50">&copy; 2025 Iqmal Nuriadi. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <div class="d-flex gap-3 justify-content-center justify-content-md-end">
                    <a href="https://www.linkedin.com/in/iqmal-nuriadi-007156197/" target="_blank" class="text-white-50 text-decoration-none">
                        <i class="fab fa-linkedin fs-5"></i>
                    </a>
                    <a href="mailto:inuriadi73@gmail.com" class="text-white-50 text-decoration-none">
                        <i class="fas fa-envelope fs-5"></i>
                    </a>
                    <a href="https://github.com/iqmlcaiera15" target="_blank" class="text-white-50 text-decoration-none">
                        <i class="fab fa-github fs-5"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Additional CSS -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

:root {
    --primary-color: #1e88e5;
    --primary-light: #42a5f5;
    --primary-dark: #1565c0;
    --secondary-color: #6366f1;
    --success-color: #06d6a0;
    --danger-color: #ef476f;
    --dark-color: #1a1a2e;
    --light-color: #f8f9fa;
    --page-bg: #f0f4ff;
    --section-bg: #e8eef5;
    --card-bg: #ffffff;
    --text-muted: #6b7280;
    --gradient-primary: linear-gradient(135deg, #1e88e5 0%, #6366f1 100%);
    --gradient-accent: linear-gradient(135deg, #06d6a0 0%, #10b981 100%);
}

* {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
}

body {
    font-size: 1rem;
    background: var(--page-bg);
    overflow-x: hidden;
}

.section-padding {
    padding: 100px 0;
}

/* Glass Navigation */
.glass-nav {
    background: rgba(255, 255, 255, 0.85) !important;
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.08);
    border-bottom: 1px solid rgba(255, 255, 255, 0.3);
    padding: 15px 0;
    transition: all 0.3s ease;
}

.glass-nav .navbar-brand {
    font-size: 1.5rem;
    color: var(--dark-color);
}

.glass-nav .nav-link {
    font-weight: 500;
    color: var(--dark-color) !important;
    padding: 8px 20px !important;
    border-radius: 25px;
    transition: all 0.3s ease;
    position: relative;
}

.glass-nav .nav-link:hover,
.glass-nav .nav-link.active {
    color: var(--primary-color) !important;
    background: rgba(30, 136, 229, 0.1);
}

.glass-nav .nav-link::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0;
    height: 2px;
    background: var(--primary-color);
    transition: all 0.3s ease;
    transform: translateX(-50%);
}

.glass-nav .nav-link:hover::after {
    width: 30px;
}

/* Hero Badge */
.hero-badge {
    animation: fadeInUp 0.8s ease;
}

.badge-pill {
    display: inline-flex;
    align-items: center;
    padding: 10px 24px;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border-radius: 50px;
    font-size: 0.9rem;
    font-weight: 600;
    color: white;
    border: 1px solid rgba(255, 255, 255, 0.3);
    animation: pulse 2s ease-in-out infinite;
}

@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.02); }
}

/* Hero Shapes */
.hero-shapes {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    overflow: hidden;
    z-index: 1;
}

.shape {
    position: absolute;
    border-radius: 50%;
    opacity: 0.1;
}

.shape-1 {
    width: 400px;
    height: 400px;
    background: white;
    top: -100px;
    right: -100px;
    animation: float 8s ease-in-out infinite;
}

.shape-2 {
    width: 300px;
    height: 300px;
    background: white;
    bottom: 10%;
    left: 5%;
    animation: float 10s ease-in-out infinite reverse;
}

.shape-3 {
    width: 200px;
    height: 200px;
    background: white;
    top: 40%;
    right: 20%;
    animation: float 6s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-30px) rotate(10deg); }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Hero Section */
.hero-section {
    background: linear-gradient(135deg, #1e88e5 0%, #6366f1 50%, #8b5cf6 100%);
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

/* Readability & Typography */
p,
.text-muted,
.custom-list li,
.info-list small,
.card-text {
    font-size: 1rem;
    line-height: 1.7;
    color: var(--text-muted);
}

.lead {
    font-size: 1.15rem;
    font-weight: 400;
    color: var(--text-muted);
}

h1, h2, h3, h4, h5, h6 {
    letter-spacing: -0.5px;
    color: var(--dark-color);
}

h2 {
    font-weight: 700;
}

/* Section Headers */
.section-header {
    position: relative;
}

.section-header::before {
    content: '';
    position: absolute;
    top: -20px;
    left: 0;
    width: 60px;
    height: 4px;
    background: var(--gradient-primary);
    border-radius: 2px;
}

/* Cards Enhancement */
.stat-card, .info-card, .experience-card, .skills-card, 
.cert-card, .publication-card, .edu-card, .org-card {
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    border: 1px solid rgba(0,0,0,0.05);
    background: white !important;
    border-radius: 20px;
    overflow: hidden;
}

.stat-card:hover, .info-card:hover, .experience-card:hover, .skills-card:hover, 
.cert-card:hover, .publication-card:hover, .edu-card:hover, .org-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 50px rgba(30, 136, 229, 0.15) !important;
}

/* Gradient Text */
.gradient-text {
    background: var(--gradient-primary);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
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

/* Experience Timeline */
.exp-timeline {
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 4px;
    background: linear-gradient(180deg, var(--primary-color), var(--success-color));
    border-radius: 2px;
}

.timeline-dot {
    position: absolute;
    left: -8px;
    top: 30px;
    width: 20px;
    height: 20px;
    background: white;
    border: 4px solid var(--primary-color);
    border-radius: 50%;
    z-index: 1;
}

.timeline-dot-active {
    border-color: var(--success-color);
    animation: pulse 2s infinite;
}

/* Contact Shapes */
.contact-shapes {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    overflow: hidden;
    z-index: 1;
}

.contact-shape {
    position: absolute;
    border-radius: 50%;
    opacity: 0.1;
}

.contact-shape.shape-1 {
    width: 300px;
    height: 300px;
    background: white;
    top: -100px;
    right: -50px;
}

.contact-shape.shape-2 {
    width: 200px;
    height: 200px;
    background: white;
    bottom: -50px;
    left: -50px;
}

/* Footer */
footer {
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

footer .d-flex a {
    transition: all 0.3s ease;
}

footer .d-flex a:hover {
    color: white !important;
    transform: translateY(-3px);
}

/* Cert Glow Effect */
.cert-glow {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--gradient-primary);
    border-radius: 20px 20px 0 0;
}

.cert-glow-success {
    background: var(--gradient-accent);
}

/* Education Glow */
.edu-glow {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--gradient-primary);
    border-radius: 20px 20px 0 0;
}

.edu-glow-success {
    background: var(--gradient-accent);
}

/* Organization Glow */
.org-glow {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--gradient-primary);
    border-radius: 20px 20px 0 0;
}

.org-glow-warning {
    background: linear-gradient(135deg, #f59e0b 0%, #fbbf24 100%);
}

/* Skill Item Enhancement */
.skill-item {
    text-align: center;
    transition: all 0.3s ease;
    cursor: default;
    position: relative;
    overflow: hidden;
}

.skill-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: var(--gradient-primary);
    opacity: 0;
    transition: all 0.3s ease;
    border-radius: 12px;
}

.skill-item:hover {
    background: var(--primary-color) !important;
    color: white;
    transform: translateY(-5px);
}

.skill-item:hover i {
    color: white !important;
}

.skill-item:hover p {
    color: white !important;
}

/* Info Icon */
.info-icon {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
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

/* Navbar Toggler */
.navbar-toggler:focus {
    box-shadow: none;
}

/* Form Enhancement */
.form-control:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 4px rgba(30, 136, 229, 0.1);
}

.input-group-text {
    border-radius: 12px 0 0 12px;
}

.form-control {
    border-radius: 0 12px 12px 0;
}

/* Alert Enhancement */
.alert-success {
    background: rgba(6, 214, 160, 0.15);
    border: 1px solid rgba(6, 214, 160, 0.3);
    color: #059669;
}

.alert-danger {
    background: rgba(239, 71, 111, 0.15);
    border: 1px solid rgba(239, 71, 111, 0.3);
    color: #dc2626;
}

/* Smooth Scroll */
html {
    scroll-padding-top: 80px;
}

/* Stats Counter */
.stat-counter {
    transition: all 0.3s ease;
}

.stat-counter:hover {
    transform: translateY(-5px);
}

.counter-number {
    font-size: 3rem;
    font-weight: 800;
    line-height: 1.2;
}

/* Service Card */
.service-card {
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    border: 1px solid rgba(0,0,0,0.05);
}

.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 50px rgba(30, 136, 229, 0.15) !important;
}

.service-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 20px;
}

/* Language Card */
.language-card {
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.05);
}

.language-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.1) !important;
}

.language-flag {
    font-size: 2.5rem;
}

/* Achievement Card */
.achievement-card {
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.05);
}

.achievement-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.1) !important;
}

.achievement-icon {
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 15px;
    flex-shrink: 0;
}

/* Responsive Stats */
@media (max-width: 768px) {
    .counter-number {
        font-size: 2rem;
    }
    
    .stat-counter {
        margin-bottom: 1rem;
    }
}

/* Testimonials */
.testimonial-card {
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.05);
}

.testimonial-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.1) !important;
}

.testimonial-avatar {
    width: 70px;
    height: 70px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

/* FAQ Accordion */
.accordion-item {
    overflow: hidden;
}

.accordion-button {
    background: white !important;
    color: var(--dark-color) !important;
    box-shadow: none !important;
}

.accordion-button:not(.collapsed) {
    background: rgba(30, 136, 229, 0.05) !important;
    color: var(--primary-color) !important;
}

.accordion-button:focus {
    box-shadow: none !important;
    border-color: transparent !important;
}

.accordion-body {
    background: white;
    border-top: 1px solid rgba(0,0,0,0.05);
}

/* Interests */
.interest-card {
    transition: all 0.3s ease;
    cursor: default;
}

.interest-card:hover {
    transform: translateY(-5px);
    background: var(--primary-color) !important;
}

.interest-card:hover i,
.interest-card:hover h6 {
    color: white !important;
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
    
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.glass-nav');
        if (window.scrollY > 50) {
            navbar.style.padding = '10px 0';
            navbar.style.background = 'rgba(255, 255, 255, 0.95) !important';
        } else {
            navbar.style.padding = '15px 0';
            navbar.style.background = 'rgba(255, 255, 255, 0.85) !important';
        }
    });
    
    // Smooth scroll for navbar links
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId.startsWith('#')) {
                e.preventDefault();
                const target = document.querySelector(targetId);
                if (target) {
                    const offset = 80;
                    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
</script>
@endsection
