@extends('layouts.app')

@section('title', 'About')

@section('main_class', 'container-fluid px-4 px-xl-5')

@section('content')
    <div class="about-page">
        {{-- Hero --}}
        <header class="mb-5">
        <p class="eyebrow">Tentang Departemen</p>
        <h1 class="display-6 fw-bold mb-3">Teknik Informatika ITS</h1>
        <p class="text-muted fs-5 about-description">
            Departemen Teknik Informatika ITS menjadi tempat kami mempelajari
            berbagai bidang informatika, mulai dari algoritma dan pengembangan
            perangkat lunak hingga kecerdasan buatan, pengelolaan informasi,
            jaringan komputer, dan keamanan siber.
        </p>
        </header>

        {{-- Intro + Facility Carousel --}}
        <div class="row g-4 mb-4">
        <div class="col-lg-5">
            <section class="card h-100">
                <div class="card-body p-4 p-md-5">
                    <p class="eyebrow mb-2">Informatika di ITS</p>
                    <h2 class="h4 mb-3">Lebih dari sekadar pemrograman</h2>
                    <p class="text-muted mb-0 about-description">
                        Pembelajaran di Teknik Informatika ITS mencakup berbagai
                        bidang komputasi yang digunakan untuk memahami,
                        merancang, dan mengembangkan sistem serta teknologi
                        berbasis informasi.
                    </p>
                </div>
            </section>
        </div>

        <div class="col-lg-7">
            <section class="card h-100 overflow-hidden">
                <div id="facilityCarousel" class="carousel slide h-100" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @foreach ($facilities as $facility)
                            <button
                                type="button"
                                data-bs-target="#facilityCarousel"
                                data-bs-slide-to="{{ $loop->index }}"
                                class="{{ $loop->first ? 'active' : '' }}"
                                @if ($loop->first) aria-current="true" @endif
                                aria-label="Slide {{ $loop->iteration }}"
                            ></button>
                        @endforeach
                    </div>

                    <div class="carousel-inner h-100">
                        @foreach ($facilities as $facility)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <div class="gallery-frame position-relative">
                                    <img
                                        src="{{ $facility['image'] }}"
                                        class="facility-image"
                                        alt="{{ $facility['title'] }}"
                                    >

                                    <div class="gallery-caption position-absolute bottom-0 start-0 end-0 p-4">
                                        <h3 class="h5 mb-1">{{ $facility['title'] }}</h3>
                                        <p class="mb-0 small about-description">{{ $facility['description'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#facilityCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Sebelumnya</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#facilityCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Berikutnya</span>
                    </button>
                </div>
            </section>
        </div>
        </div>

    {{-- Quick Information --}}
    <div class="row g-4 mb-4">
        @foreach ([
            ['144', 'SKS', 'Beban studi program Sarjana Teknik Informatika.'],
            ['8', 'Semester', 'Waktu studi yang dirancang untuk program sarjana.'],
            ['8', 'Bidang Minat', 'Pilihan bidang keilmuan dan penelitian di Informatika ITS.'],
        ] as [$number, $label, $description])
            <div class="col-md-4">
                <section class="card h-100">
                    <div class="card-body p-4">
                        <span class="section-number">{{ $number }}</span>
                        <h2 class="h5 mb-2">{{ $label }}</h2>
                        <p class="text-muted mb-0">{{ $description }}</p>
                    </div>
                </section>
            </div>
        @endforeach
    </div>

    {{-- Fields --}}
    <section class="mb-4">
        <div class="mb-3">
            <p class="eyebrow mb-1">Bidang Keilmuan</p>
            <h2 class="h3 mb-2">Apa yang dipelajari?</h2>
            <p class="text-muted about-description">
                Bidang keilmuan di Informatika ITS mencakup berbagai aspek
                pengembangan perangkat lunak, sistem cerdas, data, jaringan,
                hingga penerapan komputasi.
            </p>
        </div>

        <div class="row g-4">
            @foreach ([
                ['01', 'Software & Computing', 'Mencakup algoritma dan pemrograman, rekayasa perangkat lunak, pemodelan, serta berbagai penerapan komputasi.'],
                ['02', 'AI, Data & Vision', 'Mencakup kecerdasan buatan, data mining, pengelolaan informasi, computer vision, dan pengembangan sistem cerdas.'],
                ['03', 'Network & Cybersecurity', 'Mencakup jaringan komputer, sistem terdistribusi, komputasi berbasis jaringan, serta keamanan informasi dan keamanan siber.'],
            ] as [$number, $title, $description])
                <div class="col-md-4">
                    <section class="card h-100">
                        <div class="card-body p-4">
                            <span class="section-number">{{ $number }}</span>
                            <h2 class="h5">{{ $title }}</h2>
                            <p class="text-muted mb-0" style="text-align: justify;">
                                {{ $description }}
                            </p>
                        </div>
                    </section>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Research Interest --}}
    <section class="card mb-4">
        <div class="card-body p-4 p-md-5">
            <p class="eyebrow mb-1">Bidang Minat</p>
            <h2 class="h4 mb-3">Delapan bidang minat Informatika ITS</h2>
            <p class="text-muted mb-4" style="text-align: justify">
                Departemen Teknik Informatika ITS memiliki delapan bidang minat
                yang mencakup berbagai area dalam ilmu komputer dan informatika.
            </p>

            <div class="row g-3">
                @foreach ([
                    'Software Engineering',
                    'Net-Centric Computing',
                    'Intelligent Computing and Vision',
                    'Networking Technology and Intelligent Cybersecurity',
                    'Graphics, Interaction, and Game',
                    'Algorithm and Programming',
                    'Information Intelligent Management',
                    'Applied Modelling and Computation',
                ] as $interest)
                    <div class="col-md-6 col-lg-4">
                        <div class="border rounded-3 px-3 py-3 h-100 d-flex align-items-center">
                            <span class="fw-semibold">{{ $interest }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Facilities --}}
    <section class="mb-4">
        <div class="mb-3">
            <p class="eyebrow mb-1">Fasilitas</p>
            <h2 class="h3 mb-2">Mendukung kegiatan belajar dan penelitian</h2>
            <p class="text-muted about-description">
                Departemen Teknik Informatika ITS menyediakan berbagai fasilitas
                untuk mendukung perkuliahan, penelitian, diskusi, dan kegiatan
                mahasiswa.
            </p>
        </div>

        <div class="row g-4">
            @foreach ([
                ['Laboratorium', 'Terdapat 8 laboratorium dan 2 workshop yang digunakan sebagai pusat pembelajaran dan penelitian.'],
                ['Ruang Kelas', 'Ruang perkuliahan dilengkapi fasilitas pendukung seperti komputer, koneksi internet, Wi-Fi, dan perangkat pembelajaran.'],
                ['Ruang Sidang', 'Ruang sidang tersedia untuk mendukung kegiatan akademik dan dapat menampung sekitar 40 orang.'],
                ['Student Center', 'Student Center Prof. Supeno menjadi ruang bagi mahasiswa dan civitas akademika untuk melakukan berbagai kegiatan.'],
                ['Ruang Aula', 'Aula Prof. Handayani Tjandrasa digunakan untuk berbagai kegiatan akademik dan kegiatan berskala besar.'],
            ] as [$title, $description])
                <div class="col-md-6 col-lg-4">
                    <section class="card h-100">
                        <div class="card-body p-4">
                            <h3 class="h5 mb-2">{{ $title }}</h3>
                            <p class="text-muted mb-0" style="text-align: justify;">
                                {{ $description }}
                            </p>
                        </div>
                    </section>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Academic Programs --}}
    <section class="card mb-4">
        <div class="card-body p-4 p-md-5">
            <p class="eyebrow mb-1">Akademik</p>
            <h2 class="h4 mb-3">Program Studi</h2>
            <p class="text-muted mb-4 about-description">
                Departemen Teknik Informatika ITS menyelenggarakan pendidikan
                pada berbagai jenjang dan bidang yang berkaitan dengan
                informatika, rekayasa perangkat lunak, serta kecerdasan
                artifisial.
            </p>

            <div class="row g-3">
                @foreach ([
                    ['S1', 'Teknik Informatika'],
                    ['IUP', 'Teknik Informatika'],
                    ['S1', 'Rekayasa Perangkat Lunak'],
                    ['S1', 'Rekayasa Kecerdasan Artifisial'],
                    ['S2', 'Teknik Informatika'],
                    ['S3', 'Ilmu Komputer'],
                ] as [$level, $program])
                    <div class="col-md-6 col-lg-4">
                        <div class="border rounded-3 p-3 h-100">
                            <span class="small text-muted">{{ $level }}</span>
                            <h3 class="h6 mb-0 mt-1">{{ $program }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Accreditation --}}
    <section class="card mb-4">
        <div class="card-body p-4 p-md-5 d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
            <div>
                <p class="eyebrow mb-1">Akreditasi</p>
                <h2 class="h4 mb-2">S1 Teknik Informatika</h2>
                <p class="text-muted mb-0">
                    Terakreditasi
                    <strong>Unggul</strong>
                    oleh LAM INFOKOM untuk periode 2025-2030.
                </p>
            </div>

            <div class="text-md-end">
                <span class="badge rounded-pill text-primary-emphasis bg-primary-subtle px-4 py-3 fs-6">
                    Akreditasi Unggul
                </span>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="card">
        <div class="card-body p-4 p-md-5 d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
            <div>
                <p class="eyebrow mb-1">Kenali lebih lanjut</p>
                <h2 class="h4 mb-2">Kunjungi website resmi Teknik Informatika ITS</h2>
                <p class="text-muted mb-0" style="text-align: justify">
                    Temukan informasi akademik, penelitian, fasilitas,
                    serta kegiatan Departemen Teknik Informatika ITS.
                </p>
            </div>

            <a
                href="https://www.its.ac.id/informatika"
                target="_blank"
                rel="noopener noreferrer"
                class="btn btn-primary px-4 py-2 fw-semibold flex-shrink-0"
            >
                Buka Website
            </a>
        </div>
    </section>

    </div>
@endsection
