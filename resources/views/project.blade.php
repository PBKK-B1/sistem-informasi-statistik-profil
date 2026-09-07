@extends('layouts.app')

@section('title', 'Ide Proyek')

@section('content')
    <section class="project-hero" aria-labelledby="project-title">
        <div class="project-copy">
            <p class="eyebrow">Final project · Agentic AI</p>
            <h1 id="project-title">ITS Academic Assistant.</h1>
            <p>Asisten akademik yang membantu mahasiswa menemukan informasi kampus, menyusun rencana belajar, dan menjaga tenggat tetap terlihat. Keputusan akhir tetap berada di tangan pengguna.</p>
            <span class="project-status">Tahap konsep &amp; eksplorasi</span>
        </div>
        <div class="assistant-map" aria-label="Empat area bantuan ITS Academic Assistant">
            <span class="orbit-label one">Informasi</span>
            <span class="orbit-label two">Rencana studi</span>
            <span class="orbit-label three">Pengingat</span>
            <span class="orbit-label four">Rekomendasi</span>
            <div class="map-core"><span><i class="bi bi-stars" aria-hidden="true"></i><strong>Academic<br>Assistant</strong></span></div>
        </div>
    </section>

    <section class="problem-solution" aria-label="Masalah dan solusi" data-reveal>
        <article class="story-column">
            <span class="story-index">01</span>
            <h2>Informasi tersebar, sementara waktu terbatas.</h2>
            <p>Pengumuman, tenggat, dan rujukan akademik sering berada di banyak kanal. Ketika jadwal padat, mahasiswa menghabiskan energi hanya untuk menemukan kembali informasi yang dibutuhkan.</p>
        </article>
        <article class="story-column">
            <span class="story-index">02</span>
            <h2>Satu pintu untuk langkah yang lebih terarah.</h2>
            <p>Pengguna dapat bertanya dengan bahasa sehari-hari, mendapatkan rangkuman dengan rujukan, lalu meninjau rekomendasi sebelum memasukkannya ke rencana belajar atau daftar tugas.</p>
        </article>
    </section>

    <section aria-labelledby="features-title" data-reveal>
        <div class="section-heading">
            <div><p class="section-kicker">Empat kemampuan inti</p><h2 id="features-title">Membantu pada momen yang benar-benar penting.</h2></div>
            <p>Fokus proyek bukan membuat keputusan otomatis, tetapi mengurangi friksi agar mahasiswa dapat mengambil keputusan dengan informasi yang lebih jelas.</p>
        </div>
        <div class="feature-grid">
            @foreach ([
                ['search', 'Pencarian informasi akademik', 'Tanya jawab dengan rangkuman dan rujukan sumber sehingga jawaban tetap dapat diverifikasi.'],
                ['diagram-3', 'Perencanaan studi', 'Usulan mata kuliah berdasarkan minat, beban SKS, dan prasyarat untuk ditinjau bersama dosen wali.'],
                ['calendar2-check', 'Pengingat tenggat', 'Daftar tugas yang membantu mahasiswa melihat prioritas dan menghindari pekerjaan yang terlewat.'],
                ['graph-up-arrow', 'Rekomendasi belajar personal', 'Saran materi serta ritme belajar yang mempertimbangkan target dan perkembangan pengguna.'],
            ] as [$icon, $title, $description])
                <article class="feature-card">
                    <span class="feature-icon"><i class="bi bi-{{ $icon }}" aria-hidden="true"></i></span>
                    <h3>{{ $title }}</h3>
                    <p>{{ $description }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="impact-panel" aria-labelledby="impact-title" data-reveal>
        <div>
            <p class="eyebrow text-white">Dampak yang dituju</p>
            <h2 id="impact-title">Lebih teratur. Lebih fokus belajar.</h2>
        </div>
        <div>
            <p>Keberhasilan tidak hanya dilihat dari banyaknya fitur, tetapi dari apakah sistem membantu mahasiswa bergerak lebih cepat dan percaya diri.</p>
            <div class="impact-list">
                <div><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>Waktu pencarian informasi lebih singkat</span></div>
                <div><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>Tugas dan tenggat lebih mudah dipantau</span></div>
                <div><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>Keputusan studi memiliki konteks yang lebih jelas</span></div>
            </div>
        </div>
    </section>
@endsection
