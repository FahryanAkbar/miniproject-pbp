<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Craftfolio')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f9f9f9;
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
            z-index: 1030;
        }

        .navbar-brand {
            font-weight: 600;
            color: #1e1e2f !important;
        }

        .nav-link {
            color: #555 !important;
            font-weight: 500;
            transition: color 0.3s ease;
            padding: 0.5rem 1rem;
        }

        .nav-link:hover {
            color: #0d6efd !important;
        }

        .card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        }

        footer {
            font-size: 0.9rem;
            color: #888;
            margin-top: auto;
        }

        .rounded-circle {
            border: 4px solid #eaeaea;
        }
        
        /* Full screen header/banner styles */
        .full-width-banner {
            width: 100%;
            background-color: #0d6efd;
            color: white;
            padding: 3rem 0;
            margin-bottom: 2rem;
            margin-top: 0;
        }
        
        /* Content section styles */
        .content-section {
            padding: 2rem 0;
        }
        
        /* Utility classes for full-width sections */
        .section-full {
            width: 100%;
            padding-left: 0;
            padding-right: 0;
        }
        
        .container-large {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }
        
        /* Sticky sidebar */
        .sticky-sidebar {
            position: sticky;
            top: 20px;
        }
        
        /* Centralizar a navegação */
        .navbar-nav {
            align-items: center;
        }
        
        /* Centralizar o nome do site */
        .navbar > .container-large,
        .navbar > .container-fluid {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }
        
        /* Navigation layout */
        .site-header {
            text-align: center;
            padding: 1rem 0;
        }
        
        .main-navigation {
            display: flex;
            justify-content: center;
            margin-bottom: 0;
        }
        
        .main-navigation .navbar-nav {
            display: flex;
            gap: 2rem;
        }
        
        @media (max-width: 768px) {
            .sticky-sidebar {
                position: static;
            }
        }
    </style>
</head>
<body>
    <!-- Site Header -->
    {{-- <header class="site-header">
        <div class="container">
            <h1 class="navbar-brand m-0">Craftfolio</h1>
        </div>
    </header> --}}
    
    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg py-2 mb-0">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand m-0" href="/">Craftfolio</a>
    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/biodata">Biodata</a></li>
                    <li class="nav-item"><a class="nav-link" href="/portfolio">Portofolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="text-center py-3 mt-5">
        &copy; {{ date('Y') }} Fahryan Akbar — All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>