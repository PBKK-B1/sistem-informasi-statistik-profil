<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Profil Kelompok 1 mahasiswa Teknik Informatika ITS, informasi departemen, dan ide proyek akademik.">
    <meta name="theme-color" content="#071a2f">
    <title>@yield('title', 'Profil Kelompok 1') | Kelompok B1</title>
    <script>document.documentElement.classList.add('js')</script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=ibm-plex-sans:400,500,600,700|ibm-plex-serif:500,600,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100 @yield('body_class')">
    <div class="scroll-progress" aria-hidden="true"><span></span></div>
    <a class="skip-link" href="#main-content">Lewati ke konten utama</a>
    <span class="visually-hidden">Kelompok 1 - Teknik Informatika ITS</span>

    <nav class="site-nav navbar navbar-expand-lg" aria-label="Navigasi utama">
        <div class="container-xl">
            <a class="site-brand navbar-brand" href="{{ route('home') }}" aria-label="Kelompok B1, Beranda">
                <!-- <span class="brand-symbol" aria-hidden="true">B1</span> -->
                <span class="brand-copy">
                    <strong>Kelompok B1<span class="visually-hidden"> (Kelompok 1)</span></strong>
                    <small>Informatika ITS</small>
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Buka navigasi">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1 mt-3 mt-lg-0">
                    @foreach (['home' => 'Beranda', 'about' => 'Tentang', 'project' => 'Ide Proyek', 'calculator' => 'Kalkulator'] as $routeName => $label)
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs($routeName) ? 'active' : '' }}"
                               href="{{ $routeName === 'calculator' ? route('calculator', ['angka1' => 10, 'angka2' => 5, 'operasi' => 'kali']) : route($routeName) }}"
                               @if (request()->routeIs($routeName)) aria-current="page" @endif>{{ $label }}</a>
                        </li>
                    @endforeach
                </ul>
                <a href="{{ route('about') }}" class="nav-cta d-none d-lg-inline-flex ms-lg-3">
                    Jelajahi IF ITS <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </nav>

    <main id="main-content" class="@yield('main_class', 'container-xl') page-main">
        @yield('content')
    </main>

    <footer class="site-footer mt-auto">
        <div class="container-xl">
            <div class="footer-main">
                <div>
                    <span class="footer-mark">B1<span>/</span>24</span>
                    <p>Enam mahasiswa, satu ruang untuk belajar, bereksperimen, dan membangun sesuatu yang berguna.</p>
                </div>
                <div class="footer-links">
                    <span>Navigasi</span>
                    <a href="{{ route('home') }}">Profil anggota</a>
                    <a href="{{ route('project') }}">Ide proyek</a>
                    <a href="{{ route('about') }}">Tentang IF ITS</a>
                </div>
                <div class="footer-links">
                    <span>Referensi</span>
                    <a href="https://www.its.ac.id/informatika/" target="_blank" rel="noopener noreferrer">Website Informatika ITS <i class="bi bi-arrow-up-right"></i></a>
                    <a href="https://www.its.ac.id/" target="_blank" rel="noopener noreferrer">Institut Teknologi Sepuluh Nopember <i class="bi bi-arrow-up-right"></i></a>
                </div>
            </div>
            <div class="footer-bottom">
                <span>&copy; {{ date('Y') }} Kelompok B1</span>
                <span>Pemrograman Berbasis Kerangka Kerja · B</span>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
