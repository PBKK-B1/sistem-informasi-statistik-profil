@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="hero p-4 p-md-5 mb-4">
        <p class="eyebrow mb-3">Sistem Informasi Statik Profil Mahasiswa ITS</p>
        <h1 class="display-5 fw-bold mb-3">Selamat datang di<br>ruang akademik saya.</h1>
        <p class="hero-description fs-5 mb-4">Saya {{ $student['name'] }}, mahasiswa {{ $student['department'] }}. Kenali profil akademik saya dan jelajahi ide teknologi untuk mendukung perjalanan belajar mahasiswa.</p>
        <a href="{{ route('project') }}" class="btn btn-light px-4 py-2 fw-semibold">Jelajahi ide proyek <span aria-hidden="true">&rarr;</span></a>
    </section>
    <div class="row g-4">
        <div class="col-lg-7">
            <section class="card h-100">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="avatar flex-shrink-0" aria-hidden="true">MP</div>
                        <div><p class="eyebrow mb-1">Profil Mahasiswa</p><h2 class="h3 mb-0">{{ $student['name'] }}</h2></div>
                    </div>
                    <dl class="row mb-0 profile-detail">
                        <dt class="col-sm-4 text-muted fw-normal mb-1 mb-sm-3">NRP</dt><dd class="col-sm-8 fw-semibold mb-3">{{ $student['nrp'] }}</dd>
                        <dt class="col-sm-4 text-muted fw-normal mb-1 mb-sm-3">Departemen</dt><dd class="col-sm-8 fw-semibold mb-3">{{ $student['department'] }}</dd>
                        <dt class="col-sm-4 text-muted fw-normal mb-1">Status</dt><dd class="col-sm-8 mb-0"><span class="badge rounded-pill text-success-emphasis bg-success-subtle px-3 py-2">{{ $student['status'] }}</span></dd>
                    </dl>
                </div>
            </section>
        </div>
        <div class="col-lg-5">
            <section class="card h-100">
                <div class="card-body p-4">
                    <p class="eyebrow">Belajar &amp; Berkarya</p>
                    <h2 class="h4 mb-3">Dari pengetahuan menjadi solusi.</h2>
                    <p class="text-muted">Pemrograman, data, dan kecerdasan buatan membuka peluang untuk membangun pengalaman akademik yang lebih baik.</p>
                    <a href="{{ route('about') }}" class="fw-semibold text-decoration-none">Kenali departemen <span aria-hidden="true">&rarr;</span></a>
                </div>
            </section>
        </div>
    </div>
@endsection
