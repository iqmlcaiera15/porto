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
                                <span>Preview Segera</span>
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
                        @if(!empty($project['disabled']))
                            <button type="button" class="btn btn-outline-secondary w-100 rounded-pill btn-lg" disabled>
                                <i class="fas fa-lock me-2"></i>Tidak Tersedia
                            </button>
                        @else
                            <button
                                type="button"
                                class="btn btn-primary w-100 rounded-pill btn-lg"
                                data-bs-toggle="modal"
                                data-bs-target="#projectDetailModal"
                                data-title="{{ $project['title'] }}"
                                data-description="{{ $project['description'] }}"
                                data-image="{{ $project['image'] ?? '' }}"
                                data-tech='@json($project["tech"])'
                            data-role="{{ $project['role'] ?? 'Quality Assurance Specialist' }}"
                            data-duration="{{ $project['duration'] ?? '3 Bulan' }}"
                            data-highlights='@json($project["highlights"] ?? ["Menyusun test scenario & case untuk UAT/SIT","Membuat data prep untuk kebutuhan testing","Kolaborasi lintas tim untuk bug triage"])'
                            data-result="{{ $project['result'] ?? 'Kualitas rilis meningkat dan defect kritikal berkurang.' }}"
                                data-link="{{ $project['link'] ?? '#' }}"
                            >
                                <i class="fas fa-arrow-right me-2"></i>Lihat Detail
                            </button>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Project Detail Modal -->
<div class="modal fade" id="projectDetailModal" tabindex="-1" aria-labelledby="projectDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content project-modal border-0 overflow-hidden">
            <div class="project-modal-header px-4 pt-4 pb-3">
                <div class="d-flex justify-content-between align-items-start gap-3">
                    <div>
                        <p class="text-uppercase small mb-1 modal-eyebrow">Detail Proyek</p>
                        <h5 class="modal-title fw-bold mb-0" id="projectDetailModalLabel">Detail Proyek</h5>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="modal-body px-4 pb-4">
                <div class="project-modal-hero rounded-4 overflow-hidden mb-4">
                    <img id="projectModalImage" src="" alt="" class="w-100 h-100 object-fit-cover">
                    <div class="project-modal-overlay"></div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-8">
                        <h4 id="projectModalTitle" class="fw-bold mb-2"></h4>
                        <p id="projectModalDescription" class="text-muted mb-4"></p>
                        <h6 class="fw-semibold mb-3">Highlights</h6>
                        <ul id="projectModalHighlights" class="custom-list mb-0"></ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="project-modal-card rounded-4 p-3 h-100">
                            <div class="mb-3">
                                <p class="text-muted small mb-1">Role</p>
                                <p id="projectModalRole" class="fw-semibold mb-0"></p>
                            </div>
                            <div class="mb-3">
                                <p class="text-muted small mb-1">Durasi</p>
                                <p id="projectModalDuration" class="fw-semibold mb-0"></p>
                            </div>
                            <div class="mb-3">
                                <p class="text-muted small mb-2">Tech Stack</p>
                                <div id="projectModalTech" class="d-flex flex-wrap gap-2"></div>
                            </div>
                            <div class="mb-3">
                                <p class="text-muted small mb-1">Hasil</p>
                                <p id="projectModalResult" class="fw-semibold mb-0"></p>
                            </div>
                            <a id="projectModalLink" href="#" target="_blank" class="btn btn-primary w-100 rounded-pill mt-2 d-none">
                                <i class="fas fa-external-link-alt me-2"></i>Kunjungi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
    border: 1px solid rgba(30, 136, 229, 0.12);
    overflow: hidden;
    background: linear-gradient(180deg, #ffffff 0%, #f6f8ff 100%);
}

.project-image-wrapper {
    position: relative;
    height: 220px;
    overflow: hidden;
    background: linear-gradient(135deg, rgba(30, 136, 229, 0.08) 0%, rgba(6, 214, 160, 0.12) 100%);
}

.project-image-wrapper::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(15, 23, 42, 0) 55%, rgba(15, 23, 42, 0.25) 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.project-card-modern:hover .project-image-wrapper::after {
    opacity: 1;
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
    flex-direction: column;
    gap: 0.5rem;
    background: linear-gradient(135deg, rgba(30, 136, 229, 0.12) 0%, rgba(6, 214, 160, 0.18) 100%);
    color: var(--primary-color);
    font-size: 3rem;
}

.project-image-placeholder span {
    font-size: 0.95rem;
    font-weight: 600;
    color: rgba(26, 26, 46, 0.7);
}

.project-modal {
    border-radius: 24px;
    background: #ffffff;
    box-shadow: 0 30px 80px rgba(15, 23, 42, 0.25);
}

.project-modal-header {
    background: linear-gradient(135deg, #1e88e5 0%, #1565c0 100%);
    color: #ffffff;
}

.modal-eyebrow {
    color: rgba(255, 255, 255, 0.75);
    letter-spacing: 0.18em;
}

.project-modal-hero {
    height: 260px;
    position: relative;
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.2) 0%, rgba(118, 75, 162, 0.2) 100%);
}

.project-modal-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(0, 0, 0, 0) 40%, rgba(0, 0, 0, 0.25) 100%);
}

.object-fit-cover {
    object-fit: cover;
}

.project-modal-card {
    background: #f6f8ff;
    border: 1px solid rgba(30, 136, 229, 0.12);
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

    const projectModal = document.getElementById('projectDetailModal');
    if (projectModal) {
        projectModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            if (!button) {
                return;
            }

            const title = button.getAttribute('data-title') || 'Detail Proyek';
            const description = button.getAttribute('data-description') || '';
            const image = button.getAttribute('data-image') || '';
            const role = button.getAttribute('data-role') || 'Quality Assurance Specialist';
            const duration = button.getAttribute('data-duration') || '3 Bulan';
            const result = button.getAttribute('data-result') || '';
            const link = button.getAttribute('data-link') || '#';

            let tech = [];
            let highlights = [];
            try {
                tech = JSON.parse(button.getAttribute('data-tech')) || [];
            } catch (error) {
                tech = [];
            }
            try {
                highlights = JSON.parse(button.getAttribute('data-highlights')) || [];
            } catch (error) {
                highlights = [];
            }

            projectModal.querySelector('#projectModalTitle').textContent = title;
            projectModal.querySelector('#projectModalDescription').textContent = description;
            projectModal.querySelector('#projectModalRole').textContent = role;
            projectModal.querySelector('#projectModalDuration').textContent = duration;
            projectModal.querySelector('#projectModalResult').textContent = result;

            const imageEl = projectModal.querySelector('#projectModalImage');
            imageEl.src = image || '';
            imageEl.alt = title;

            const techWrapper = projectModal.querySelector('#projectModalTech');
            techWrapper.innerHTML = '';
            tech.forEach(item => {
                const badge = document.createElement('span');
                badge.className = 'tech-badge-modern';
                badge.innerHTML = `<i class="fas fa-circle-notch me-2"></i>${item}`;
                techWrapper.appendChild(badge);
            });

            const highlightsWrapper = projectModal.querySelector('#projectModalHighlights');
            highlightsWrapper.innerHTML = '';
            highlights.forEach(item => {
                const li = document.createElement('li');
                li.className = 'mb-2';
                li.innerHTML = `<i class="fas fa-check-circle text-success me-2"></i>${item}`;
                highlightsWrapper.appendChild(li);
            });

            const linkEl = projectModal.querySelector('#projectModalLink');
            if (link && link !== '#') {
                linkEl.href = link;
                linkEl.classList.remove('d-none');
            } else {
                linkEl.href = '#';
                linkEl.classList.add('d-none');
            }
        });
    }
</script>

@endsection
