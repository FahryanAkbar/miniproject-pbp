@extends('layouts.app')

@section('title', 'Contact - CraftFolio')

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
                    <h1 class="display-5 fw-bold mb-3">Hubungi Saya</h1>
                    <p class="lead mb-4">Silakan gunakan salah satu metode di bawah untuk terhubung</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="mailto:{{ $contact['email_utama'] }}" class="btn btn-outline-light btn-sm">
                            <i class="bi bi-envelope me-2"></i> Email
                        </a>
                        <a href="https://wa.me/{{ str_replace([' ', '-'], '', $contact['whatsapp']) }}" 
                           class="btn btn-outline-light btn-sm">
                            <i class="bi bi-whatsapp me-2"></i> WhatsApp
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
                    <!-- Contact Methods Card -->
                    <div class="card mb-4 border-0 shadow-sm">
                        <div class="card-header" style="background-color: #ecf0f1; border-bottom: 1px solid #bdc3c7;">
                            <h5 class="card-title m-0" style="color: #2c3e50;">
                                <i class="bi bi-people me-2" style="color: #7f8c8d;"></i>Metode Kontak
                            </h5>
                        </div>
                        <div class="card-body" style="background-color: #ffffff;">
                            <ul class="list-group list-group-flush">
                                @foreach([
                                    ['icon' => 'envelope', 'label' => 'Email Utama', 'value' => $contact['email_utama']],
                                    ['icon' => 'envelope', 'label' => 'Email Alternatif', 'value' => $contact['email_alternatif']],
                                    ['icon' => 'telephone', 'label' => 'Telepon', 'value' => $contact['telepon']],
                                    ['icon' => 'whatsapp', 'label' => 'WhatsApp', 'value' => $contact['whatsapp']],
                                    ['icon' => 'telegram', 'label' => 'Telegram', 'value' => $contact['telegram']]
                                ] as $item)  <!-- Ubah $contact menjadi $item -->
                                <li class="list-group-item border-0 px-0 py-2">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0" style="color: #7f8c8d;">
                                            <i class="bi bi-{{ $item['icon'] }}"></i>  <!-- Ganti $contact dengan $item -->
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <small class="text-muted d-block">{{ $item['label'] }}</small>  <!-- Ganti $contact dengan $item -->
                                            @if(in_array($item['icon'], ['envelope']))
                                                <a href="mailto:{{ $item['value'] }}" style="color: #2c3e50;">{{ $item['value'] }}</a>
                                            @elseif($item['icon'] === 'whatsapp')
                                                <a href="https://wa.me/{{ str_replace([' ', '-'], '', $item['value']) }}" style="color: #2c3e50;">{{ $item['value'] }}</a>
                                            @else
                                                {{ $item['value'] }}
                                            @endif
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Social Media Card -->
                    <div class="card border-0 shadow-sm">
                        <div class="card-header" style="background-color: #ecf0f1; border-bottom: 1px solid #bdc3c7;">
                            <h5 class="card-title m-0" style="color: #2c3e50;">
                                <i class="bi bi-globe me-2" style="color: #7f8c8d;"></i>Sosial Media
                            </h5>
                        </div>
                        <div class="card-body" style="background-color: #ffffff;">
                            <div class="d-flex flex-column gap-2">
                                @foreach([
                                    ['icon' => 'linkedin', 'label' => 'LinkedIn', 'url' => 'https://'.$contact['linkedin']],
                                    ['icon' => 'github', 'label' => 'GitHub', 'url' => 'https://'.$contact['github']],
                                    ['icon' => 'instagram', 'label' => 'Instagram', 'url' => 'https://instagram.com/'.ltrim($contact['instagram'], '@')]
                                ] as $social)
                                    <a href="{{ $social['url'] }}" target="_blank" class="btn btn-outline-secondary d-flex align-items-center">
                                        <i class="bi bi-{{ $social['icon'] }} me-2"></i> {{ $social['label'] }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Address Card -->
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-header" style="background-color: #ecf0f1; border-bottom: 1px solid #bdc3c7;">
                        <h5 class="card-title m-0 d-flex align-items-center" style="color: #2c3e50;">
                            <i class="bi bi-geo-alt me-2" style="color: #7f8c8d;"></i>Alamat
                        </h5>
                    </div>
                    <div class="card-body" style="background-color: #ffffff;">
                        <div class="row">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <h6 style="color: #7f8c8d;">Alamat Kantor</h6>
                                <p style="color: #2c3e50;">{{ $contact['alamat_kantor'] }}</p>
                            </div>
                            <div class="col-md-6">
                                <h6 style="color: #7f8c8d;">Alamat Rumah</h6>
                                <p style="color: #2c3e50;">{{ $contact['alamat_rumah'] }}</p>
                            </div>
                        </div>
                        <div class="mt-3 rounded overflow-hidden">
                            {!! $contact['peta_embed'] !!}
                        </div>
                    </div>
                </div>
                
                <!-- Working Hours Card -->
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-header" style="background-color: #ecf0f1; border-bottom: 1px solid #bdc3c7;">
                        <h5 class="card-title m-0 d-flex align-items-center" style="color: #2c3e50;">
                            <i class="bi bi-clock me-2" style="color: #7f8c8d;"></i>Jam Operasional
                        </h5>
                    </div>
                    <div class="card-body" style="background-color: #ffffff;">
                        <p style="color: #2c3e50;">{{ $contact['jam_operasional'] }}</p>
                        <div class="alert alert-light mt-3" style="background-color: #ecf0f1; color: #2c3e50;">
                            <i class="bi bi-info-circle me-2"></i> Untuk pertanyaan di luar jam kerja, silakan gunakan formulir kontak online.
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form Card -->
                <div class="card border-0 shadow-sm">
                    <div class="card-header" style="background-color: #ecf0f1; border-bottom: 1px solid #bdc3c7;">
                        <h5 class="card-title m-0 d-flex align-items-center" style="color: #2c3e50;">
                            <i class="bi bi-send me-2" style="color: #7f8c8d;"></i>Formulir Kontak
                        </h5>
                    </div>
                    <div class="card-body" style="background-color: #ffffff;">
                        <p style="color: #2c3e50;">Gunakan formulir online untuk pesan yang lebih detail:</p>
                        <a href="{{ $contact['form_kontak'] }}" target="_blank" 
                           class="btn btn-primary d-inline-flex align-items-center">
                            <i class="bi bi-box-arrow-up-right me-2"></i> Buka Formulir
                        </a>
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