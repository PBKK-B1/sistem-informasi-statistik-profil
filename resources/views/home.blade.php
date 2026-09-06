@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="hero p-4 p-md-5 mb-4">
        <p class="eyebrow mb-3">Profil kelompok</p>
        <h1 class="display-5 fw-bold mb-3">Kami Kelompok 1 dari Teknik Informatika ITS.</h1>
        <p class="hero-description fs-5 mb-4">Halaman ini kami buat untuk memperkenalkan siapa saja yang ada di dalam tim, apa yang sedang kami pelajari, dan bagaimana kami menyusun ide proyek dengan cara yang sederhana dan bisa diikuti.</p>
        <div class="d-flex flex-wrap gap-2">
            <a href="{{ route('project') }}" class="btn btn-light px-4 py-2 fw-semibold">Lihat ide proyek <span aria-hidden="true">&rarr;</span></a>
            <a href="{{ route('about') }}" class="btn btn-outline-light px-4 py-2 fw-semibold">Lihat About</a>
        </div>
    </section>
    <section class="mb-4">
        <div class="d-flex flex-wrap align-items-end justify-content-between gap-2 mb-3">
            <div>
                <p class="eyebrow mb-1">Kenalan dulu</p>
                <h2 class="h3 mb-0">Enam orang, minat yang beragam</h2>
            </div>
            <span class="badge rounded-pill text-primary-emphasis bg-primary-subtle px-3 py-2">{{ count($students) }} mahasiswa</span>
        </div>
        <div class="row g-4">
            @foreach ($students as $student)
                <div class="col-md-6 col-xl-4">
                    <section class="card h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 mb-4">
                                <div class="avatar flex-shrink-0">
                                    @if (! empty($student['photo']) && file_exists(public_path($student['photo'])))
                                        <img src="{{ asset($student['photo']) }}" alt="Foto {{ $student['name'] }}">
                                    @else
                                        <img src="{{ asset('images/members/default-profile.svg') }}" alt="Foto profil default">
                                    @endif
                                </div>
                                <div>
                                    <p class="eyebrow mb-1">Anggota {{ $loop->iteration }}</p>
                                    <h3 class="h4 mb-0">{{ $student['name'] }}</h3>
                                </div>
                            </div>
                            <p class="text-muted small mb-4">{{ $student['bio'] }}</p>
                            <dl class="row mb-0 profile-detail">
                                <dt class="col-4 text-muted fw-normal mb-1">NRP</dt><dd class="col-8 fw-semibold mb-3">{{ $student['nrp'] }}</dd>
                                <dt class="col-4 text-muted fw-normal mb-1">Kelas</dt><dd class="col-8 fw-semibold mb-3">{{ $student['class'] }}</dd>
                                <dt class="col-4 text-muted fw-normal mb-1">Minat</dt><dd class="col-8 fw-semibold mb-3">{{ $student['interest'] }}</dd>
                                <dt class="col-4 text-muted fw-normal mb-1">Peran</dt><dd class="col-8 fw-semibold mb-0">{{ $student['role'] }}</dd>
                            </dl>
                            <button type="button" class="btn btn-outline-primary w-100 mt-4" data-bs-toggle="modal" data-bs-target="#profileModal{{ $loop->iteration }}">
                                Lihat profil lengkap
                            </button>
                        </div>
                    </section>
                </div>
            @endforeach
        </div>
    </section>
    @foreach ($students as $student)
        <div class="modal fade" id="profileModal{{ $loop->iteration }}" tabindex="-1" aria-labelledby="profileModalLabel{{ $loop->iteration }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header px-4 pt-4">
                        <div>
                            <p class="eyebrow mb-1">Profil anggota {{ $loop->iteration }}</p>
                            <h2 class="modal-title h3" id="profileModalLabel{{ $loop->iteration }}">{{ $student['name'] }}</h2>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body p-4">
                        <div class="d-flex flex-column flex-sm-row align-items-center align-items-sm-start gap-3 mb-4">
                            <div class="avatar avatar-lg flex-shrink-0">
                                @if (! empty($student['photo']) && file_exists(public_path($student['photo'])))
                                    <img src="{{ asset($student['photo']) }}" alt="Foto {{ $student['name'] }}">
                                @else
                                    <img src="{{ asset('images/members/default-profile.svg') }}" alt="Foto profil default">
                                @endif
                            </div>
                            <div class="text-center text-sm-start">
                                <p class="text-muted mb-3">{{ $student['bio'] }}</p>
                                <div class="d-flex flex-wrap gap-2 justify-content-center justify-content-sm-start">
                                    @if ($student['linkedin'])
                                        <a href="{{ $student['linkedin'] }}" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-primary">LinkedIn / Profil profesional</a>
                                    @else
                                        <span class="small text-muted">Tautan profesional belum diisi</span>
                                    @endif
                                    @if (! empty($student['email']))
                                        <a href="mailto:{{ $student['email'] }}" class="btn btn-sm btn-outline-secondary">Email: {{ $student['email'] }}</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="profile-section">
                                    <p class="eyebrow mb-2">Pendidikan</p>
                                    <p class="mb-0 text-secondary">{!! nl2br(e($student['education'])) !!}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="profile-section">
                                    <p class="eyebrow mb-2">Pengalaman kerja &amp; asisten dosen</p>
                                    <p class="mb-0 text-secondary">{!! nl2br(e($student['work'])) !!}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="profile-section">
                                    <p class="eyebrow mb-2">Organisasi &amp; kepanitiaan</p>
                                    <p class="mb-0 text-secondary">{!! nl2br(e($student['organization'])) !!}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="profile-section">
                                    <p class="eyebrow mb-2">Prestasi &amp; penghargaan</p>
                                    <p class="mb-0 text-secondary">{!! nl2br(e($student['achievements'])) !!}</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="profile-section">
                                    <p class="eyebrow mb-2">Technical skills</p>
                                    <div class="d-flex flex-wrap gap-2">
                                        @foreach ($student['skills'] as $skill)
                                            <span class="badge rounded-pill text-primary-emphasis bg-primary-subtle px-3 py-2">{{ $skill }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer px-4 pb-4">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="row g-4">
        <div class="col-lg-12">
            <section class="card h-100">
                <div class="card-body p-4">
                    <p class="eyebrow">Tentang kami</p>
                    <h2 class="h4 mb-3">Belajar sambil bikin sesuatu yang benar-benar kepakai.</h2>
                    <p class="text-muted">Kami masih belajar, jadi kami sengaja menulis halaman ini dengan bahasa yang lebih wajar dan dekat dengan cara bicara sehari-hari. Harapannya, pengunjung bisa cepat menangkap siapa kami, apa yang kami kerjakan, dan kenapa proyek ini dibuat.</p>
                    <a href="{{ route('about') }}" class="fw-semibold text-decoration-none">Kenali departemen <span aria-hidden="true">&rarr;</span></a>
                </div>
            </section>
        </div>
    </div>
@endsection
