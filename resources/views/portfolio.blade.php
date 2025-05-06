@extends('layouts.app')

@section('title', 'Portfolio - CraftFolio')

@section('content')
    <!-- Header Section -->
    <div class="profile-header" style="background: linear-gradient(135deg, #2c3e50, #34495e);">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <img src="{{ asset('images/fahryan.jpg') }}" alt="Foto Fahryan Akbar" 
                         class="profile-picture rounded-circle shadow-lg" style="border-color: rgba(255,255,255,0.3);">
                </div>
                <div class="col-md-9 text-white">
                    <h1 class="display-5 fw-bold mb-3">{{ $projects['nama'] }}</h1>
                    <p class="lead mb-4">{{ $projects['judul'] }}</p>
                    <p class="mb-4">{{ $projects['deskripsi_singkat'] }}</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="mailto:{{ $projects['kontak']['email'] }}" class="btn btn-outline-light btn-sm">
                            <i class="bi bi-envelope me-2"></i> Email
                        </a>
                        <a href="{{ $projects['kontak']['github'] }}" target="_blank" class="btn btn-outline-light btn-sm">
                            <i class="bi bi-github me-2"></i> GitHub
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main Content -->
    <div class="container my-5">
        <div class="row g-4">
            <!-- Left Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 20px;">
                    <!-- Skills Card -->
                    <div class="card mb-4 border-0 shadow-sm">
                        <div class="card-header" style="background-color: #ecf0f1; border-bottom: 1px solid #bdc3c7;">
                            <h5 class="card-title m-0" style="color: #2c3e50;">
                                <i class="bi bi-tools me-2" style="color: #7f8c8d;"></i>Skills
                            </h5>
                        </div>
                        <div class="card-body" style="background-color: #ffffff;">
                            @foreach($projects['skill'] as $category => $skills)
                            <div class="mb-3">
                                <h6 style="color: #7f8c8d;">{{ $category }}</h6>
                                <div class="d-flex flex-wrap gap-2">
                                    @foreach($skills as $skill)
                                        <span class="badge p-2" style="background-color: #ecf0f1; color: #2c3e50; border: 1px solid #bdc3c7;">{{ $skill }}</span>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Experience Card -->
                    <div class="card mb-4 border-0 shadow-sm">
                        <div class="card-header" style="background-color: #ecf0f1; border-bottom: 1px solid #bdc3c7;">
                            <h5 class="card-title m-0" style="color: #2c3e50;">
                                <i class="bi bi-briefcase me-2" style="color: #7f8c8d;"></i>Experience
                            </h5>
                        </div>
                        <div class="card-body" style="background-color: #ffffff;">
                            @foreach($projects['pengalaman'] as $exp)
                            <div class="mb-3">
                                <h6 style="color: #2c3e50;">{{ $exp['posisi'] }}</h6>
                                <p class="mb-1" style="color: #7f8c8d;">{{ $exp['perusahaan'] }}</p>
                                <small class="text-muted">{{ $exp['periode'] }}</small>
                                <p class="mt-2" style="color: #2c3e50;">{{ $exp['deskripsi'] }}</p>
                            </div>
                            @if(!$loop->last)<hr>@endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Projects Section -->
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-header" style="background-color: #ecf0f1; border-bottom: 1px solid #bdc3c7;">
                        <h5 class="card-title m-0 d-flex align-items-center" style="color: #2c3e50;">
                            <i class="bi bi-folder me-2" style="color: #7f8c8d;"></i>Featured Projects
                        </h5>
                    </div>
                    <div class="card-body" style="background-color: #ffffff;">
                        <div class="row">
                            @foreach($projects['proyek'] as $project)
                            <div class="col-md-6 mb-4 d-flex">
                                <div class="project-card border rounded p-3 shadow-sm w-100 d-flex flex-column" style="background-color: #f9f9f9;">
                                    <img src="{{ $project['foto-porto'] }}" alt="{{ $project['nama'] }}" class="img-fluid rounded mb-3" style="object-fit: cover; height: 200px; width: 100%;">
                                    <h5 class="text-dark">{{ $project['nama'] }}</h5>
                                    <p class="text-dark flex-grow-1">{{ $project['deskripsi'] }}</p>
                                    <div class="d-flex flex-wrap gap-2 mb-3">
                                        @foreach($project['teknologi'] as $tech)
                                        <span class="badge p-2" style="background-color: #ecf0f1; color: #2c3e50;">{{ $tech }}</span>
                                        @endforeach
                                    </div>
                                    <div class="mt-auto">
                                        <a href="{{ $project['link'] }}" target="_blank" class="btn btn-sm w-100" style="background-color: #2c3e50; color: white;">
                                            View Project
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                
                <!-- Education Section -->
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-header" style="background-color: #ecf0f1; border-bottom: 1px solid #bdc3c7;">
                        <h5 class="card-title m-0 d-flex align-items-center" style="color: #2c3e50;">
                            <i class="bi bi-mortarboard me-2" style="color: #7f8c8d;"></i>Education
                        </h5>
                    </div>
                    <div class="card-body" style="background-color: #ffffff;">
                        @foreach($projects['pendidikan'] as $edu)
                        <div class="mb-3">
                            <h6 style="color: #2c3e50;">{{ $edu['gelar'] }}</h6>
                            <p class="mb-1" style="color: #7f8c8d;">{{ $edu['institusi'] }}</p>
                            <small class="text-muted">{{ $edu['tahun'] }}</small>
                        </div>
                        @if(!$loop->last)<hr>@endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .profile-header {
            padding: 3rem 0;
            margin-bottom: 2rem;
        }
        
        .profile-picture {
            width: 180px;
            height: 180px;
            object-fit: cover;
        }
        
        .project-card {
            transition: transform 0.3s ease;
        }
        
        .project-card:hover {
            transform: translateY(-5px);
        }
        
        @media (max-width: 768px) {
            .profile-picture {
                width: 140px;
                height: 140px;
            }
            
            .display-5 {
                font-size: 2rem;
            }
        }
    </style>
@endsection