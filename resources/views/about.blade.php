@extends('layouts.app')

@section('title', 'About')

@section('content')
    <header class="mb-4">
        <p class="eyebrow">Tentang Departemen</p>
        <h1 class="display-6 fw-bold">Teknik Informatika ITS</h1>
        <p class="text-muted fs-5 col-lg-9">Mempelajari komputasi, mengembangkan teknologi, dan merancang solusi untuk kebutuhan masyarakat.</p>
    </header>
    <section class="card mb-4">
        <div class="card-body p-4 p-md-5">
            <h2 class="h4 mb-3">Pendidikan yang mendorong inovasi digital</h2>
            <p class="text-muted mb-0">Departemen Teknik Informatika di Institut Teknologi Sepuluh Nopember (ITS) merupakan lingkungan pembelajaran bidang komputasi dan teknologi informasi. Pendidikan informatika membekali mahasiswa dengan cara berpikir logis, kemampuan pemrograman, serta keterampilan memecahkan masalah. Pengembangan perangkat lunak, pengolahan data, dan kecerdasan buatan menjadi bekal untuk mengeksplorasi inovasi digital yang bermanfaat.</p>
        </div>
    </section>
    <div class="row g-4">
        @foreach ([
            ['01', 'Pemrograman & Perangkat Lunak', 'Membangun dasar algoritma, menulis kode yang terstruktur, dan mengembangkan aplikasi untuk menyelesaikan permasalahan nyata.'],
            ['02', 'Data & Kecerdasan Buatan', 'Mengeksplorasi pengolahan data dan AI untuk menemukan pola, mendukung keputusan, serta mengembangkan sistem cerdas.'],
            ['03', 'Teknologi & Inovasi', 'Menghubungkan pengetahuan dengan kreativitas melalui kolaborasi dan pengembangan solusi digital yang relevan.'],
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
@endsection
