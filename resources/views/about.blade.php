@extends('layouts.app')

@section('title', 'About')

@section('content')
    <header class="mb-4">
        <p class="eyebrow">Tempat kami belajar</p>
        <h1 class="display-6 fw-bold">Teknik Informatika ITS</h1>
        <p class="text-muted fs-5 col-lg-9">Di sini kami belajar menyusun logika, bekerja bareng tim, dan mengubah masalah sehari-hari menjadi solusi digital yang lebih masuk akal untuk dipakai.</p>
    </header>
    <div class="row g-4 mb-4">
        <div class="col-lg-5">
            <section class="card h-100">
                <div class="card-body p-4 p-md-5">
                    <h2 class="h4 mb-3">Bukan cuma soal kode</h2>
                    <p class="text-muted mb-0">Belajar Teknik Informatika buat kami bukan hanya memastikan program berjalan. Kami juga belajar memahami kebutuhan pengguna, menata kerja tim, membaca data, dan menjelaskan keputusan teknis dengan bahasa yang lebih mudah dipahami.</p>
                </div>
            </section>
        </div>
        <div class="col-lg-7">
            <section class="card h-100 overflow-hidden">
                <div id="facilityCarousel" class="carousel slide h-100" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @foreach ($facilities as $facility)
                            <button type="button" data-bs-target="#facilityCarousel" data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}" @if ($loop->first) aria-current="true" @endif aria-label="Slide {{ $loop->iteration }}"></button>
                        @endforeach
                    </div>
                    <div class="carousel-inner h-100">
                        @foreach ($facilities as $facility)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <div class="gallery-frame position-relative" style="min-height: 22rem;">
                                    <img src="{{ $facility['image'] }}" class="d-block w-100 h-100" alt="{{ $facility['title'] }}">
                                    <div class="gallery-caption position-absolute bottom-0 start-0 end-0 p-4">
                                        <h3 class="h5 mb-1">{{ $facility['title'] }}</h3>
                                        <p class="mb-0 small">{{ $facility['description'] }}</p>
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
    <div class="row g-4">
        @foreach ([
            ['01', 'Pemrograman & Perangkat Lunak', 'Membangun dasar algoritma, menulis kode yang rapi, dan mengembangkan aplikasi untuk menyelesaikan masalah yang nyata.'],
            ['02', 'Data & Kecerdasan Buatan', 'Mengeksplorasi pengolahan data dan AI untuk menemukan pola, membantu keputusan, dan merancang sistem yang lebih cerdas.'],
            ['03', 'Teknologi & Inovasi', 'Menghubungkan pengetahuan dengan kreativitas lewat kolaborasi dan ide yang relevan dengan kebutuhan sekarang.'],
        ] as [$number, $title, $description])
            <div class="col-md-4">
                <section class="card h-100"><div class="card-body p-4">
                    <span class="section-number">{{ $number }}</span>
                    <h2 class="h5">{{ $title }}</h2>
                    <p class="text-muted mb-0">{{ $description }}</p>
                </div></section>
            </div>
        @endforeach
    </div>
    <section class="card mt-4">
        <div class="card-body p-4 p-md-5 d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
            <div>
                <p class="eyebrow mb-1">Ingin mengetahui lebih lanjut?</p>
                <h2 class="h4 mb-2">Kunjungi Website Resmi Teknik Informatika ITS.</h2>
            </div>
            <a href="https://www.its.ac.id/informatika" target="_blank" rel="noopener noreferrer" class="btn btn-primary px-4 py-2 fw-semibold">Buka Website</a>
        </div>
    </section>
@endsection
