@extends('layouts.app')

@section('title', 'Project Idea')

@section('content')
    <header class="hero p-4 p-md-5 mb-4">
        <p class="eyebrow">Ide proyek Kelompok 1 · Agentic AI</p>
        <h1 class="display-5 fw-bold mb-3">ITS Academic Assistant</h1>
        <p class="hero-description fs-5 mb-3">Kami membayangkan asisten akademik yang membantu mahasiswa menemukan informasi kampus, merapikan rencana belajar, dan mengingat tugas yang sering terlewat. Fokusnya bukan menggantikan keputusan mahasiswa, tetapi membantu mereka mengambil langkah berikutnya.</p>
        <span class="badge border border-light-subtle rounded-pill px-3 py-2">Tahap konsep</span>
    </header>
    <div class="row g-4 mb-4">
        <div class="col-md-6">
            <section class="card h-100"><div class="card-body p-4">
                <p class="eyebrow">01 / Masalah</p>
                <h2 class="h4">Informasi tersebar, waktu terbatas.</h2>
                <p class="text-muted mb-0">Informasi kuliah sering tersebar di banyak tempat. Saat jadwal sedang padat, mencari pengumuman, mencatat tenggat, dan menentukan prioritas bisa menghabiskan waktu yang seharusnya dipakai untuk belajar.</p>
            </div></section>
        </div>
        <div class="col-md-6">
            <section class="card h-100"><div class="card-body p-4">
                <p class="eyebrow">02 / Solusi</p>
                <h2 class="h4">Satu asisten untuk rencana yang terarah.</h2>
                <p class="text-muted mb-0">Pengguna dapat bertanya dengan bahasa sehari-hari, lalu menerima rangkuman beserta sumber yang bisa diperiksa. Untuk rencana belajar dan pengingat, pengguna tetap meninjau dan menyetujui hasilnya sebelum digunakan.</p>
            </div></section>
        </div>
    </div>
    <section class="mb-4">
        <p class="eyebrow">03 / Fitur Utama</p>
        <h2 class="h3 mb-3">Hal yang ingin kami bantu</h2>
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
