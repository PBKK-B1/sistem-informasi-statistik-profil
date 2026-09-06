<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Profil Kelompok 1 mahasiswa Teknik Informatika ITS, berisi anggota, informasi kampus, dan ide proyek yang sedang dikembangkan.">
    <title>@yield('title', 'Profil Kelompok 1') | Kelompok 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        :root { --profile-navy: #142e50; --profile-blue: #235bd7; --profile-surface: #ffffff; --profile-soft: #edf3fb; }
        body { background: #f4f7fb; color: #253750; }
        .navbar { background: rgba(255, 255, 255, .92); backdrop-filter: blur(10px); }
        .brand-mark { background: var(--profile-navy); color: #fff; border-radius: .7rem; padding: .5rem .65rem; font-size: .9rem; }
        .navbar-brand { color: var(--profile-navy); }
        .nav-link { border-radius: .5rem; padding: .55rem .9rem !important; font-weight: 500; }
        .navbar-nav .nav-link.active { background: #eaf0ff; color: #174bb5; }
        .eyebrow { font-size: .75rem; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #476388; }
        .hero { background: linear-gradient(120deg, #142e50, #204b7b); color: #fff; border-radius: 1.5rem; position: relative; overflow: hidden; }
        .hero::after { content: ""; position: absolute; inset: auto -8rem -8rem auto; width: 16rem; height: 16rem; border-radius: 50%; background: rgba(255,255,255,.08); }
        .hero .eyebrow { color: #b9d5ff; }
        .hero-description { color: #d4e1f3; max-width: 40rem; }
        .card { border: 1px solid #e1e7f0; border-radius: 1rem; box-shadow: 0 .25rem 1.5rem rgba(20, 46, 80, .035); background: var(--profile-surface); }
        .avatar { width: 5rem; height: 5rem; display: grid; place-items: center; background: linear-gradient(135deg, #eaf0ff, #d6e4ff); color: #2354ac; border-radius: 1.2rem; font-size: 1.8rem; font-weight: 700; overflow: hidden; }
        .avatar-lg { width: 7rem; height: 7rem; border-radius: 1.5rem; }
        .avatar img { width: 100%; height: 100%; object-fit: cover; }
        .section-number { display: inline-block; color: #2354ac; background: #eaf0ff; border-radius: .6rem; padding: .45rem .7rem; font-weight: 700; margin-bottom: 1rem; }
        .btn-primary { background: var(--profile-blue); border-color: var(--profile-blue); }
        .text-muted { color: #5d6d82 !important; }
        .profile-detail { overflow-wrap: anywhere; }
        .student-bio, .profile-detail dd, .profile-section p, .profile-section li { text-align: justify; }
        .profile-section { height: 100%; padding: 1rem; border: 1px solid #e1e7f0; border-radius: .85rem; background: #f8fafd; }
        .gallery-frame { border-radius: 1rem; overflow: hidden; border: 1px solid #dce5f2; background: #fff; }
        .gallery-frame img { width: 100%; height: 100%; object-fit: cover; }
        .gallery-caption { background: linear-gradient(180deg, rgba(20,46,80,0), rgba(20,46,80,.78)); color: #fff; }
        main { flex: 1; }
        a:focus-visible, button:focus-visible { outline: 3px solid #e7aa32; outline-offset: 3px; }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    <a class="visually-hidden-focusable position-absolute p-3 bg-white z-3" href="#main-content">Lewati ke konten utama</a>
    <nav class="navbar navbar-expand-lg border-bottom py-3" aria-label="Navigasi utama">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="{{ route('home') }}">
                <span class="brand-mark">B1</span> Kelompok 1
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Buka navigasi">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto gap-2 mt-3 mt-lg-0">
                    @foreach (['home' => 'Home', 'about' => 'About', 'project' => 'Project Idea', 'calculator' => 'Kalkulator'] as $routeName => $label)
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs($routeName) ? 'active' : '' }}"
                               href="{{ $routeName === 'calculator' ? route('calculator', ['angka1' => 10, 'angka2' => 5, 'operasi' => 'kali']) : route($routeName) }}"
                               @if (request()->routeIs($routeName)) aria-current="page" @endif>{{ $label }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
    <main id="main-content" class="container py-4 py-md-5">
        @yield('content')
    </main>
    <footer class="border-top bg-white py-4 mt-4">
        <div class="container d-flex flex-column flex-sm-row justify-content-between gap-2 small text-muted">
            <span>Kelompok 1</span>
            <span>Pemrograman Berbasis Kerangka Kerja (B)</span>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
