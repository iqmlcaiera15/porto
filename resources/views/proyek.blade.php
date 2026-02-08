@extends('layouts.app')

@section('title', 'Portfolio - Iqmal Nuriadi | Projects')

@section('content')


<!-- Hero Section -->
<section id="projects-hero" class="hero-section position-relative overflow-hidden">
    <div class="hero-gradient"></div>
    <div class="container position-relative" style="z-index: 2;">
        <div class="row align-items-center min-vh-60 py-5">
            <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                <span class="badge bg-primary bg-opacity-10 text-white border border-white border-opacity-25 px-3 py-2 mb-3 rounded-pill">
                    <i class="fas fa-layer-group me-2"></i>Selected Work
                </span>
                <h1 class="display-4 fw-bold mb-3">Proyek yang Pernah Saya Kerjakan</h1>
                <p class="lead mb-4 text-white-50">
                    Kumpulan proyek yang menunjukkan pengalaman saya dalam analisis, pengujian, dan pengembangan solusi digital.
                </p>
                <a href="#projects" class="btn btn-light btn-lg rounded-pill px-4 hover-lift">
                    <i class="fas fa-arrow-down me-2"></i>Lihat Proyek
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="text-primary fw-semibold text-uppercase letter-spacing-1">Portofolio</span>
            <h2 class="display-5 fw-bold mt-2 mb-3">Proyek Terbaru</h2>
            <p class="lead text-muted">Beberapa proyek yang telah saya kerjakan</p>
        </div>
        <div class="row g-4">
            @foreach($projects as $project)
            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="project-card-modern bg-white rounded-4 shadow-sm h-100 hover-lift">
                    <div class="project-image-wrapper">
                        @if(!empty($project['image']))
                            <img src="{{ $project['image'] }}" class="project-image" alt="{{ $project['title'] }}">
                        @else
                            <div class="project-image-placeholder">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                        @endif
                    </div>
                    <div class="p-4">
                        <h5 class="fw-bold mb-2">{{ $project['title'] }}</h5>
                        <p class="text-muted mb-3">{{ $project['description'] }}</p>
                        <div class="d-flex flex-wrap gap-2 mb-4">
                            @foreach($project['tech'] as $tech)
                                <span class="tech-badge-modern">
                                    <i class="fas fa-circle-notch me-2"></i>{{ $tech }}
                                </span>
                            @endforeach
                        </div>
                        @if(!empty($project['link']) && $project['link'] !== '#')
                            <a href="{{ $project['link'] }}" class="btn btn-primary w-100 rounded-pill btn-lg">
                                <i class="fas fa-arrow-right me-2"></i>Lihat Detail
                            </a>
                        @else
                            <button class="btn btn-outline-secondary w-100 rounded-pill btn-lg" disabled>
                                Tidak tersedia
                            </button>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
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
}

.section-padding {
    padding: 100px 0;
}

/* Hero Section */
.hero-section {
    background: linear-gradient(135deg, #1e88e5 0%, #1565c0 100%);
    color: white;
    position: relative;
}

.min-vh-60 {
    min-height: 60vh;
}

.hero-gradient {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        radial-gradient(circle at 20% 50%, rgba(255,255,255,0.1) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(255,255,255,0.1) 0%, transparent 50%);
}

.letter-spacing-1 {
    letter-spacing: 1px;
}

/* Readability */
body {
    font-size: 1.05rem;
}

p,
.text-muted,
.card-text {
    font-size: 1.03rem;
}

.lead {
    font-size: 1.2rem;
}

/* Project Cards */
.project-card-modern {
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.05);
    overflow: hidden;
}

.project-image-wrapper {
    position: relative;
    height: 220px;
    overflow: hidden;
}

.project-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.project-card-modern:hover .project-image {
    transform: scale(1.05);
}

.project-image-placeholder {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.2) 0%, rgba(118, 75, 162, 0.2) 100%);
    color: var(--primary-color);
    font-size: 3rem;
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

.btn-outline-secondary {
    border-width: 2px;
}

/* Badges */
.tech-badge-modern {
    display: inline-flex;
    align-items: center;
    padding: 8px 16px;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-radius: 20px;
    font-size: 0.8rem;
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

/* Responsive */
@media (max-width: 768px) {
    .section-padding {
        padding: 60px 0;
    }

    .display-4 {
        font-size: 2.25rem;
    }

    body {
        font-size: 1rem;
    }

    .lead {
        font-size: 1.1rem;
    }
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
