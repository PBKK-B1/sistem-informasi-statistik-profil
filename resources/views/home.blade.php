@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <section class="home-hero" aria-labelledby="home-title">
        <div class="hero-content">
            <div>
                <p class="eyebrow">Profil Kelompok · PBKK B</p>
                <h1 class="hero-title" id="home-title">Enam orang, minat yang beragam.<em>Satu tim.</em></h1>
            </div>
            <div class="hero-intro">
                <p>Kami adalah Kelompok B1, mahasiswa Teknik Informatika ITS angkatan 2024 dengan minat yang bergerak dari rekayasa perangkat lunak dan keamanan siber hingga AI, data, dan gim.</p>
                <a href="#anggota" class="btn btn-light px-4 py-3">Kenali tim <i class="bi bi-arrow-down ms-2" aria-hidden="true"></i></a>
            </div>
        </div>
        <aside class="hero-panel" aria-label="Ringkasan kelompok">
            <div>
                <span class="hero-panel-label">Anggota aktif</span>
                <span class="hero-panel-number">0{{ count($students) }}</span>
                <p class="hero-panel-copy">6 mahasiswa dengan fokus keilmuan yang dipertemukan dalam satu kelas dan satu proyek.</p>
                <span class="visually-hidden">Nama Anggota 6 · Koordinator proyek</span>
                <div class="avatar-stack" aria-label="Foto anggota kelompok">
                    @foreach (array_slice($students, 0, 6) as $student)
                        <img src="{{ asset($student['photo']) }}" alt="{{ $student['name'] }}">
                    @endforeach
                </div>
            </div>
            <div>
                <div class="hero-panel-rule"></div>
                <div class="micro-stat"><span>Angkatan</span><strong>2024</strong></div>
                <div class="hero-panel-rule"></div>
                <div class="micro-stat"><span>Final project</span><strong>Agentic AI</strong></div>
            </div>
        </aside>
    </section>

    <section class="members-section" id="anggota" aria-labelledby="members-title">
        <div class="section-heading" data-reveal>
            <div>
                <p class="section-kicker">Orang-orang di balik B1</p>
                <h2 id="members-title">Kenal lebih dekat dengan tim kami.</h2>
            </div>
        </div>

        <div class="row member-grid">
            @foreach ($students as $student)
                <div class="col-md-6 col-xl-4" data-reveal>
                    <article class="card member-card">
                        <div class="member-visual">
                            <span class="member-index">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                            @if (! empty($student['photo']) && file_exists(public_path($student['photo'])))
                                <img src="{{ asset($student['photo']) }}" alt="Foto {{ $student['name'] }}" loading="lazy">
                            @else
                                <img src="{{ asset('images/members/default-profile.svg') }}" alt="Foto profil default" loading="lazy">
                            @endif
                            <span class="member-role">{{ ! empty($student['role']) ? $student['role'] : 'Mahasiswa Informatika' }}</span>
                        </div>
                        <div class="member-card-body">
                            <h3>{{ $student['name'] }}</h3>
                            <p class="member-origin"><i class="bi bi-geo-alt-fill" aria-hidden="true"></i>{{ $student['origin'] }}</p>
                            <p class="member-interest">{{ $student['interest'] }}</p>
                            <button type="button" class="member-action" data-bs-toggle="modal" data-bs-target="#profileModal{{ $loop->iteration }}" aria-label="Lihat profil lengkap {{ $student['name'] }}">
                                Lihat perjalanan dan keahlian
                                <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </button>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </section>

    @foreach ($students as $student)
        <div class="modal fade" id="profileModal{{ $loop->iteration }}" tabindex="-1" aria-labelledby="profileModalLabel{{ $loop->iteration }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header px-4 py-3">
                        <div>
                            <p class="eyebrow mb-1">Profil anggota {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</p>
                            <h2 class="modal-title h3 mb-0" id="profileModalLabel{{ $loop->iteration }}">{{ $student['name'] }}</h2>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body p-4">
                        <div class="profile-intro d-flex flex-column flex-sm-row align-items-center align-items-sm-start gap-3 mb-4">
                            @if (! empty($student['photo']) && file_exists(public_path($student['photo'])))
                                <img class="profile-photo flex-shrink-0" src="{{ asset($student['photo']) }}" alt="Foto {{ $student['name'] }}">
                            @else
                                <img class="profile-photo flex-shrink-0" src="{{ asset('images/members/default-profile.svg') }}" alt="Foto profil default">
                            @endif
                            <div class="text-center text-sm-start">
                                <p class="mb-3">{{ $student['bio'] }}</p>
                                <div class="d-flex flex-wrap gap-2 justify-content-center justify-content-sm-start">
                                    @if (! empty($student['linkedin']))
                                        <a href="{{ $student['linkedin'] }}" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-light"><i class="bi bi-linkedin me-1" aria-hidden="true"></i> LinkedIn</a>
                                    @endif
                                    <span class="btn btn-sm btn-outline-light disabled">NRP {{ $student['nrp'] }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3">
                            @foreach ([
                                ['Pendidikan', 'mortarboard', $student['education']],
                                ['Pengalaman profesional', 'briefcase', $student['work']],
                                ['Organisasi & kepanitiaan', 'people', $student['organization']],
                                ['Prestasi & penghargaan', 'trophy', $student['achievements']],
                            ] as [$title, $icon, $items])
                                <div class="col-md-6">
                                    <section class="profile-section">
                                        <p class="eyebrow mb-2"><i class="bi bi-{{ $icon }}" aria-hidden="true"></i> {{ $title }}</p>
                                        @if (count(array_filter($items)))
                                            <ul class="mb-0 ps-3">
                                                @foreach (array_filter($items) as $item)
                                                    <li>{{ $item }}</li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <p class="small text-muted mb-0">Belum ada informasi yang ditambahkan.</p>
                                        @endif
                                    </section>
                                </div>
                            @endforeach
                            <div class="col-12">
                                <section class="profile-section">
                                    <p class="eyebrow mb-2"><i class="bi bi-code-slash" aria-hidden="true"></i> Keahlian teknis</p>
                                    <div class="d-flex flex-wrap gap-2">
                                        @foreach ($student['skills'] as $skill)
                                            <span class="skill-chip">{{ $skill }}</span>
                                        @endforeach
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer px-4 py-3">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup profil</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <section class="department-feature" data-reveal aria-labelledby="department-title">
        <img src="{{ asset('images/facilities/departemen-informatika.jpg') }}" alt="Gedung Departemen Teknik Informatika ITS" loading="lazy">
        <div class="department-content">
            <p class="eyebrow">Ruang tempat kami bertumbuh</p>
            <h2 id="department-title">Teknik Informatika ITS.</h2>
            <p>Lingkungan belajar yang mempertemukan fondasi komputasi, riset, kreativitas, dan persoalan nyata, dari algoritma hingga kecerdasan artifisial.</p>
            <a href="{{ route('about') }}" class="btn btn-light align-self-start px-4 py-3 mt-2">Jelajahi departemen <i class="bi bi-arrow-up-right ms-2" aria-hidden="true"></i></a>
        </div>
    </section>
@endsection
