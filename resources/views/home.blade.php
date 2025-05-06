@extends('layouts.app')

@section('title', 'Home - CraftFolio')

@section('content')
    <!-- Hero Section -->
    <div class="hero-section" style="background: linear-gradient(135deg, #2c3e50, #34495e); min-height: 80vh;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6 text-white">
                    <h1 class="display-4 fw-bold mb-4">Fahryan Akbar</h1>
                    <p class="lead mb-4">Full Stack Developer & UI Enthusiast</p>
                    <p class="mb-5">Membangun solusi digital yang elegan dan fungsional dengan teknologi modern</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="{{ route('portfolio') }}" class="btn btn-light btn-lg px-4">
                            <i class="bi bi-folder me-2"></i> Portfolio
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg px-4">
                            <i class="bi bi-chat-left-text me-2"></i> Kontak
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('images/hero-3.png') }}" alt="Illustration" class="img-fluid" style="max-height: 500px;">
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Projects -->
    <div class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold" style="color: #2c3e50;">Proyek Unggulan</h2>
                <p class="text-muted">Beberapa karya terbaik yang telah saya kembangkan</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 d-flex flex-column">
                        <img src="{{ asset('images/rs-petrokimia-gresik.png') }}" class="card-img-top" alt="SIMRS Project" style="height: 180px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 style="color: #2c3e50;">SIMRS</h5>
                            <p class="text-muted mb-3">Sistem Informasi Manajemen Rumah Sakit</p>
                            <div class="d-flex flex-wrap gap-2 mb-3">
                                <span class="badge bg-primary">Laravel</span>
                                <span class="badge bg-primary">Vue.js</span>
                            </div>
                            <a href="{{ route('portfolio') }}" class="btn btn-sm btn-outline-primary mt-auto align-self-start">Detail</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 d-flex flex-column">
                        <img src="{{ asset('images/to-do-list.jpg') }}" class="card-img-top" alt="To-Do App" style="height: 180px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 style="color: #2c3e50;">My To-Do List</h5>
                            <p class="text-muted mb-3">Aplikasi Manajemen Tugas Harian</p>
                            <div class="d-flex flex-wrap gap-2 mb-3">
                                <span class="badge bg-primary">Flutter</span>
                                <span class="badge bg-primary">Firebase</span>
                            </div>
                            <a href="{{ route('portfolio') }}" class="btn btn-sm btn-outline-primary mt-auto align-self-start">Detail</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 d-flex flex-column">
                        <img src="{{ asset('images/sembako.jpg') }}" class="card-img-top" alt="E-Commerce" style="height: 180px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 style="color: #2c3e50;">Sembakoku</h5>
                            <p class="text-muted mb-3">Program Multi Platform Order Sembako</p>
                            <div class="d-flex flex-wrap gap-2 mb-3">
                                <span class="badge bg-primary">Laravel</span>
                                <span class="badge bg-primary">Livewire</span>
                            </div>
                            <a href="{{ route('portfolio') }}" class="btn btn-sm btn-outline-primary mt-auto align-self-start">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="{{ route('portfolio') }}" class="btn btn-primary px-4">
                    <i class="bi bi-arrow-right me-2"></i> Lihat Semua Proyek
                </a>
            </div>
        </div>
    </div>

    <!-- Skills Section -->
    <div class="py-4 skills-section">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold" style="color: #2c3e50;">Keahlian</h2>
                <p class="text-muted mb-0">Teknologi yang saya kuasai</p>
            </div>
            
            <!-- Slider Container -->
            <div class="skills-slider">
                <div class="skills-track">
                    <!-- First Set -->
                    <div class="skill-card">
                        <div class="skill-icon" style="color: #FF2D20;">
                            <i class="fab fa-laravel"></i>
                        </div>
                        <h6>Laravel</h6>
                    </div>
                    
                    <div class="skill-card">
                        <div class="skill-icon" style="color: #4FC08D;">
                            <i class="fab fa-vuejs"></i>
                        </div>
                        <h6>Vue.js</h6>
                    </div>
                    
                    <div class="skill-card">
                        <div class="skill-icon" style="color: #3178C6;">
                            <i class="fab fa-js"></i>
                        </div>
                        <h6>JavaScript</h6>
                    </div>
                    
                    <div class="skill-card">
                        <div class="skill-icon" style="color: #61DBFB;">
                            <i class="fab fa-react"></i>
                        </div>
                        <h6>React</h6>
                    </div>
                    
                    <div class="skill-card">
                        <div class="skill-icon" style="color: #764ABC;">
                            <i class="fab fa-vuejs"></i>
                        </div>
                        <h6>Vuex</h6>
                    </div>
                    
                    <div class="skill-card">
                        <div class="skill-icon" style="color: #DD0031;">
                            <i class="fab fa-angular"></i>
                        </div>
                        <h6>Angular</h6>
                    </div>
                    
                    <!-- Duplicated Set for Infinite Effect -->
                    <div class="skill-card">
                        <div class="skill-icon" style="color: #FF2D20;">
                            <i class="fab fa-laravel"></i>
                        </div>
                        <h6>Laravel</h6>
                    </div>
                    
                    <div class="skill-card">
                        <div class="skill-icon" style="color: #4FC08D;">
                            <i class="fab fa-vuejs"></i>
                        </div>
                        <h6>Vue.js</h6>
                    </div>
                    
                    <div class="skill-card">
                        <div class="skill-icon" style="color: #3178C6;">
                            <i class="fab fa-js"></i>
                        </div>
                        <h6>JavaScript</h6>
                    </div>
                    
                    <div class="skill-card">
                        <div class="skill-icon" style="color: #61DBFB;">
                            <i class="fab fa-react"></i>
                        </div>
                        <h6>React</h6>
                    </div>
                    
                    <div class="skill-card">
                        <div class="skill-icon" style="color: #764ABC;">
                            <i class="fab fa-vuejs"></i>
                        </div>
                        <h6>Vuex</h6>
                    </div>
                    
                    <div class="skill-card">
                        <div class="skill-icon" style="color: #DD0031;">
                            <i class="fab fa-angular"></i>
                        </div>
                        <h6>Angular</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="py-5 bg-dark text-white">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Tertarik Bekerja Sama?</h2>
            <p class="lead mb-5">Saya terbuka untuk peluang kolaborasi dan proyek baru</p>
            <a href="{{ route('contact') }}" class="btn btn-light btn-lg px-4">
                <i class="bi bi-chat-left-text me-2"></i> Hubungi Saya
            </a>
        </div>
    </div>

    <style>
        .hero-section {
            padding: 100px 0;
        }
        
        .card {
            transition: transform 0.3s ease;
            border-radius: 10px;
        }
        
        .card:hover {
            transform: translateY(-10px);
        }
        
        .bg-light {
            background-color: #f8f9fa !important;
        }

        .skills-section {
            overflow: hidden;
            position: relative;
        }
        
        .skills-slider {
            width: 100%;
            overflow: hidden;
            position: relative;
        }
        
        .skills-track {
            display: flex;
            width: max-content;
            animation: scroll 20s linear infinite;
            gap: 1rem;
            padding: 0.5rem 0;
        }
        
        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        
        .skill-card {
            flex: 0 0 auto;
            width: 120px;
            padding: 1rem;
            border-radius: 8px;
            background: white;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 1px solid rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        
        .skill-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 15px rgba(0,0,0,0.1);
        }
        
        .skill-icon {
            font-size: 2rem;
            margin-bottom: 0.5rem;
            transition: transform 0.3s ease;
        }
        
        .skill-card:hover .skill-icon {
            transform: scale(1.1);
        }
        
        .skills-track:hover {
            animation-play-state: paused;
        }
        
        @media (max-width: 768px) {
            .skill-card {
                width: 100px;
                padding: 0.75rem;
            }
            
            .skill-icon {
                font-size: 1.75rem;
            }
            
            .skills-track {
                gap: 0.75rem;
            }
        }
    </style>
@endsection