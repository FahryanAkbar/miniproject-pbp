@extends('layouts.app')

@section('title', 'Biodata - CraftFoio')

@section('content')
    <div class="profile-header" style="background: linear-gradient(135deg, #2c3e50, #34495e);">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <img src="{{ $data['foto'] }}" alt="Foto {{ $data['nama'] }}" 
                        class="profile-picture rounded-circle shadow-lg" style="border-color: rgba(255,255,255,0.3);">
                </div>
                <div class="col-md-9 text-white">
                    <h1 class="display-5 fw-bold mb-3">{{ $data['nama'] }}</h1>
                    <p class="lead mb-4">{{ $data['pendidikan'] }}</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="mailto:{{ $data['email'] }}" class="btn btn-outline-light btn-sm">
                            <i class="bi bi-envelope me-2"></i> Email
                        </a>
                        <a href="tel:{{ $data['no_hp'] }}" class="btn btn-outline-light btn-sm">
                            <i class="bi bi-telephone me-2"></i> Kontak
                        </a>
                        <a href="#" class="btn btn-light btn-sm" style="background-color: #ecf0f1; color: #2c3e50;">
                            <i class="bi bi-download me-2"></i> Download CV
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Area -->
    <div class="container my-5">
        <div class="row g-4">
            <!-- Left Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 20px;">
                    <!-- Contact Info Card -->
                    <div class="card mb-4 border-0 shadow-sm">
                        <div class="card-header" style="background-color: #ecf0f1; border-bottom: 1px solid #bdc3c7;">
                            <h5 class="card-title m-0" style="color: #2c3e50;">
                                <i class="bi bi-person-lines-fill me-2" style="color: #7f8c8d;"></i>Informasi Kontak
                            </h5>
                        </div>
                        <div class="card-body" style="background-color: #ffffff;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item border-0 px-0 py-2">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0" style="color: #7f8c8d;">
                                            <i class="bi bi-geo-alt-fill"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <small class="text-muted d-block">Alamat</small>
                                            {{ $data['alamat'] }}
                                        </div>
                                    </div>
                                </li>
                                
                                <li class="list-group-item border-0 px-0 py-2">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0" style="color: #7f8c8d;">
                                            <i class="bi bi-calendar3"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <small class="text-muted d-block">Tempat, Tanggal Lahir</small>
                                            {{ $data['ttl'] }}
                                        </div>
                                    </div>
                                </li>
                                
                                <li class="list-group-item border-0 px-0 py-2">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0" style="color: #7f8c8d;">
                                            <i class="bi bi-envelope"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <small class="text-muted d-block">Email</small>
                                            <a href="mailto:{{ $data['email'] }}" style="color: #2c3e50;">{{ $data['email'] }}</a>
                                        </div>
                                    </div>
                                </li>
                                
                                <li class="list-group-item border-0 px-0 py-2">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0" style="color: #7f8c8d;">
                                            <i class="bi bi-telephone"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <small class="text-muted d-block">No HP</small>
                                            <a href="tel:{{ $data['no_hp'] }}" style="color: #2c3e50;">{{ $data['no_hp'] }}</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Skills Card -->
                    <div class="card border-0 shadow-sm">
                        <div class="card-header" style="background-color: #ecf0f1; border-bottom: 1px solid #bdc3c7;">
                            <h5 class="card-title m-0" style="color: #2c3e50;">
                                <i class="bi bi-tools me-2" style="color: #7f8c8d;"></i>Keahlian
                            </h5>
                        </div>
                        <div class="card-body" style="background-color: #ffffff;">
                            <div class="d-flex flex-wrap gap-2">
                                @foreach ($data['keahlian'] as $skill)
                                    <span class="badge p-2" style="background-color: #ecf0f1; color: #2c3e50; border: 1px solid #bdc3c7;">{{ $skill }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- About Me Card -->
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-header" style="background-color: #ecf0f1; border-bottom: 1px solid #bdc3c7;">
                        <h5 class="card-title m-0 d-flex align-items-center" style="color: #2c3e50;">
                            <i class="bi bi-person-circle me-2" style="color: #7f8c8d;"></i>Tentang Saya
                        </h5>
                    </div>
                    <div class="card-body" style="background-color: #ffffff;">
                        <p style="color: #2c3e50;">{{ $data['deskripsi'] }}</p>
                    </div>
                </div>
                
                <!-- Quote Card -->
                <div class="card mb-4 border-0" style="background-color: #ecf0f1;">
                    <div class="card-body text-center py-4">
                        <i class="bi bi-quote display-4 mb-3" style="color: #bdc3c7;"></i>
                        <blockquote class="blockquote mb-0">
                            <p class="fs-4 fst-italic" style="color: #2c3e50;">"{{ $data['motto'] }}"</p>
                            <footer class="mt-3" style="color: #7f8c8d;">Motto Hidup</footer>
                        </blockquote>
                    </div>
                </div>
                
                <!-- Hobbies Card -->
                <div class="card border-0 shadow-sm">
                    <div class="card-header" style="background-color: #ecf0f1; border-bottom: 1px solid #bdc3c7;">
                        <h5 class="card-title m-0 d-flex align-items-center" style="color: #2c3e50;">
                            <i class="bi bi-heart-fill me-2" style="color: #7f8c8d;"></i>Hobi & Minat
                        </h5>
                    </div>
                    <div class="card-body" style="background-color: #ffffff;">
                        <p style="color: #2c3e50;">{{ $data['hobi'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="py-5 mt-5" style="background-color: #2c3e50;">
        <div class="container text-center text-white">
            <h2 class="mb-4">Tertarik berkolaborasi dengan saya?</h2>
            <p class="lead mb-4" style="color: #bdc3c7;">Mari diskusikan ide dan project Anda</p>
            <a href="/contact" class="btn btn-lg px-4 rounded-pill" style="background-color: #34495e; color: white;">
                <i class="bi bi-chat-left-text me-2"></i>Hubungi Saya
            </a>
        </div>
    </div>

    <style>
        body {
            background-color: #f5f5f5;
            line-height: 1.6;
            color: #5d4037;
        }
        
        .profile-header {
            padding: 3rem 0;
            margin-bottom: 2rem;
        }
        
        .profile-picture {
            width: 180px;
            height: 180px;
            object-fit: cover;
        }
        
        .card {
            overflow: hidden;
            margin-bottom: 1.5rem;
        }
        
        .btn-outline-light:hover {
            background-color: rgba(255,255,255,0.1);
        }
        
        @media (max-width: 768px) {
            .profile-picture {
                width: 140px;
                height: 140px;
            }
        }
    </style>
@endsection