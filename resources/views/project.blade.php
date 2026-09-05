@extends('layouts.app')

@section('title', 'Project Idea')

@section('content')
    <header class="hero p-4 p-md-5 mb-4">
        <p class="eyebrow">Ide Proyek Kelompok · Agentic AI</p>
        <h1 class="display-5 fw-bold mb-3">ITS Academic Assistant</h1>
        <p class="hero-description fs-5 mb-3">Platform Agentic AI yang membantu mahasiswa mencari informasi akademik, membuat rencana studi, mengingat tenggat tugas, dan memberikan rekomendasi belajar berdasarkan kebutuhan pengguna.</p>
        <span class="badge border border-light-subtle rounded-pill px-3 py-2">Tahap konsep</span>
    </header>
    <div class="row g-4 mb-4">
        <div class="col-md-6">
            <section class="card h-100"><div class="card-body p-4">
                <p class="eyebrow">01 / Masalah</p>
                <h2 class="h4">Informasi tersebar, waktu terbatas.</h2>
                <p class="text-muted mb-0">Mahasiswa perlu memeriksa berbagai sumber untuk menemukan informasi perkuliahan. Jadwal yang padat, tenggat tugas yang berdekatan, dan kesulitan menentukan prioritas belajar dapat menghambat proses akademik.</p>
            </div></section>
        </div>
        <div class="col-md-6">
            <section class="card h-100"><div class="card-body p-4">
                <p class="eyebrow">02 / Solusi</p>
                <h2 class="h4">Satu asisten untuk rencana yang terarah.</h2>
                <p class="text-muted mb-0">Asisten dirancang untuk memahami kebutuhan mahasiswa, menyusun langkah, dan menggunakan sumber informasi akademik yang relevan. Pengguna dapat meninjau rekomendasi beserta sumbernya dan menyetujui perubahan rencana atau pengingat sebelum diterapkan.</p>
            </div></section>
        </div>
    </div>
    <section class="mb-4">
        <p class="eyebrow">03 / Fitur Utama</p>
        <h2 class="h3 mb-3">Dukungan di setiap langkah belajar</h2>
        <div class="row g-3">
            @foreach ([
                ['Pencarian informasi akademik', 'Tanya jawab tentang informasi akademik dengan rujukan sumber untuk membantu mahasiswa memverifikasi jawaban.'],
                ['Perencanaan studi', 'Usulan rencana studi berdasarkan minat, beban SKS, dan prasyarat mata kuliah untuk ditinjau bersama dosen wali.'],
                ['Pengingat tenggat tugas', 'Pengelolaan daftar tugas dan pengingat agar mahasiswa dapat menyusun prioritas sebelum tenggat.'],
                ['Rekomendasi belajar personal', 'Saran materi dan jadwal belajar sesuai kebutuhan, target, serta perkembangan belajar pengguna.'],
            ] as [$title, $description])
                <div class="col-md-6 col-xl-3"><div class="card h-100"><div class="card-body p-4">
                    <h3 class="h5">{{ $title }}</h3><p class="text-muted mb-0">{{ $description }}</p>
                </div></div></div>
            @endforeach
        </div>
    </section>
    <section class="card"><div class="card-body p-4">
        <p class="eyebrow">04 / Dampak yang Diharapkan</p>
        <h2 class="h4">Lebih terorganisasi, lebih fokus belajar.</h2>
        <p class="text-muted mb-0">Proyek ini diharapkan mengurangi waktu pencarian informasi, membantu mahasiswa menghindari tugas yang terlewat, dan mendukung keputusan studi yang lebih terarah. Keberhasilannya dapat dievaluasi melalui ketepatan informasi, penyelesaian tugas tepat waktu, serta umpan balik mahasiswa.</p>
    </div></section>
@endsection
