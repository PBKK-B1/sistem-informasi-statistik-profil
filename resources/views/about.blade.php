@extends('layouts.app')

@section('title', 'Tentang Informatika ITS')
@section('main_class', 'container-fluid px-0')

@section('content')
    <article class="about-page">
        <header class="about-hero">
            <img src="{{ asset('images/facilities/departemen-informatika.jpg') }}" alt="Gedung Departemen Teknik Informatika ITS pada sore hari">
            <span class="about-hero-tag">Sukolilo - Surabaya</span>
            <div class="about-hero-content">
                <p class="eyebrow">Mengenal rumah akademik kami</p>
                <h1>Informatika<br>ITS.</h1>
                <p>Departemen yang menghubungkan pendidikan, riset, dan inovasi dalam ilmu komputer serta rekayasa perangkat lunak untuk menyiapkan pemimpin teknologi masa depan.</p>
            </div>
        </header>

        <div class="container-xl about-body">
            <section class="intro-editorial" aria-labelledby="about-intro-title" data-reveal>
                <div>
                    <p class="section-kicker">Tentang departemen</p>
                    <h2 id="about-intro-title">Lebih luas dari sekadar menulis kode.</h2>
                </div>
                <div>
                    <p class="lead">Di Departemen Teknik Informatika ITS, mahasiswa mempelajari cara memahami masalah, merancang sistem, mengolah informasi, membangun perangkat lunak, dan mengembangkan teknologi cerdas yang bertanggung jawab.</p>
                    <p class="section-copy">Pembelajaran bergerak dari fondasi algoritma dan pemrograman menuju pemodelan, pengelolaan informasi, komputasi berbasis jaringan, keamanan siber, grafika dan gim, hingga kecerdasan artifisial. Ekosistem ini didukung kegiatan penelitian, pengabdian masyarakat, serta kemitraan nasional dan internasional.</p>
                    <p class="source-note"><i class="bi bi-patch-check-fill" aria-hidden="true"></i><span>Informasi pada halaman ini dirangkum dari <a href="https://www.its.ac.id/informatika/" target="_blank" rel="noopener noreferrer" class="fw-bold">website resmi Departemen Teknik Informatika ITS</a>.</span></p>
                </div>
            </section>

            <section class="fact-ribbon" aria-label="Informatika ITS dalam angka" data-reveal>
                @foreach ([
                    ['144', 'SKS program sarjana'],
                    ['08', 'Semester normal'],
                    ['08', 'Bidang minat'],
                    ['49', 'Dosen departemen'],
                ] as [$number, $label])
                    <div class="fact">
                        <span class="fact-number">{{ $number }}</span>
                        <span class="fact-label">{{ $label }}</span>
                    </div>
                @endforeach
            </section>

            <section class="history-block" aria-labelledby="history-title" data-reveal>
                <div class="section-heading">
                    <div>
                        <p class="section-kicker">Jejak perjalanan</p>
                        <h2 id="history-title">Bertumbuh bersama era informasi.</h2>
                    </div>
                    <p>Perjalanan departemen dimulai ketika pendidikan komputer menjadi prioritas nasional dan terus berkembang hingga jenjang doktoral.</p>
                </div>
                <div class="timeline">
                    @foreach ([
                        ['1985', 'ITS membuka program baru bidang teknologi komputer atas arahan Direktorat Jenderal Pendidikan Tinggi.'],
                        ['1993', 'Program Studi Teknik Komputer berubah menjadi Jurusan Teknik Komputer.'],
                        ['1996', 'Nama Teknik Informatika resmi digunakan melalui SK Dirjen Dikti No. 224/DIKTI/Kep/1996.'],
                        ['2011', 'Jenjang doktoral mulai diselenggarakan, melengkapi program sarjana dan magister.'],
                    ] as [$year, $copy])
                        <div class="timeline-item">
                            <span class="timeline-year">{{ $year }}</span>
                            <p>{{ $copy }}</p>
                        </div>
                    @endforeach
                </div>
            </section>

            <section class="vision-panel" aria-labelledby="vision-title" data-reveal>
                <div class="vision-main">
                    <div>
                        <p class="eyebrow">Arah yang dituju</p>
                        <h2 id="vision-title">Unggul dalam informatika cerdas, relevan bagi transformasi digital.</h2>
                    </div>
                    <p>Visi departemen berfokus pada lembaga pendidikan yang unggul, inovatif-inventif, berkontribusi kepada masyarakat, dan memiliki reputasi internasional.</p>
                </div>
                <div class="mission-list" aria-label="Misi departemen">
                    @foreach ([
                        'Menyelenggarakan pembelajaran berkualitas dengan standar nasional dan internasional.',
                        'Menghasilkan penelitian yang inovatif, bermutu, dan bermanfaat.',
                        'Mendorong pemanfaatan teknologi informasi dan komunikasi bagi masyarakat.',
                        'Membangun kemitraan dengan berbagai institusi di dalam dan luar negeri.',
                    ] as $mission)
                        <div class="mission-item">
                            <span>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                            <p>{{ $mission }}</p>
                        </div>
                    @endforeach
                </div>
            </section>

            <section class="interest-section" aria-labelledby="interest-title" data-reveal>
                <div class="section-heading">
                    <div>
                        <p class="section-kicker">Laboratorium bidang minat</p>
                        <h2 id="interest-title">Delapan laboratorium, banyak arah eksplorasi.</h2>
                    </div>
                    <p>Setiap kartu mengarah ke profil resmi laboratorium ITS, termasuk fokus keahlian, fasilitas, riset, dan daftar pengajar.</p>
                </div>
                <div class="interest-grid">
                    @php($labLogos = ['RPL' => 'rpl.png', 'KBJ' => 'ncc.jpg', 'KCV' => 'kcv.png', 'NETICS' => 'netics.png', 'GIGA' => 'giga.png', 'AP' => 'alpro.png', 'MCI' => 'mci.jpg', 'PKT' => 'pkt.png'])
                    @foreach ([
                        ['RPL', 'Rekayasa Perangkat Lunak', 'Pengujian, arsitektur, proyek, dan pengembangan gim.', 'https://www.its.ac.id/informatika/fasilitas/laboratorium/laboratorium-rekayasa-perangkat-lunak/'],
                        ['KBJ', 'Komputasi Berbasis Jaringan', 'Jaringan aman, komputasi awan, sistem terdistribusi, dan forensik digital.', 'https://www.its.ac.id/informatika/fasilitas/laboratorium/laboratorium-komputasi-berbasis-jaringan/'],
                        ['KCV', 'Komputasi Cerdas dan Visi', 'Pengolahan citra, data mining, visi komputer, robotika, dan sistem cerdas.', 'https://www.its.ac.id/informatika/fasilitas/laboratorium/laboratorium-komputasi-cerdas-dan-visi/'],
                        ['NETICS', 'Teknologi Jaringan dan Keamanan Siber Cerdas', 'Arsitektur jaringan, keamanan siber, IoT, dan audit jaringan.', 'https://www.its.ac.id/informatika/fasilitas/laboratorium/laboratorium-arsitektur-dan-jaringan-komputer/'],
                        ['GIGA', 'Grafika, Interaksi, Gim dan Analitik', 'Grafika komputer, UX, game engine, dan realitas virtual.', 'https://www.its.ac.id/informatika/fasilitas/laboratorium/laboratorium-grafika-interaksi-dan-game/'],
                        ['AP', 'Algoritma dan Pemrograman', 'Analisis algoritma, pemrograman web, aplikasi bergerak, dan antarmuka.', 'https://www.its.ac.id/informatika/fasilitas/laboratorium/laboratorium-algoritma-dan-pemrograman/'],
                        ['MCI', 'Manajemen Cerdas Informasi', 'Sistem enterprise, tata kelola TI, basis data terdistribusi, dan big data.', 'https://www.its.ac.id/informatika/fasilitas/laboratorium/laboratorium-manajemen-cerdas-informasi/'],
                        ['PKT', 'Pemodelan dan Komputasi Terapan', 'Pemodelan, simulasi, peramalan saintifik, optimasi, dan komputasi numerik.', 'https://www.its.ac.id/informatika/fasilitas/laboratorium/laboratorium-pemodelan-dan-komputasi-terapan/'],
                    ] as [$mark, $interest, $focus, $url])
                        @php($logo = $labLogos[$mark] ?? null)
                        <a class="interest-item lab-link" href="{{ $url }}" target="_blank" rel="noopener noreferrer" aria-label="Buka profil {{ $interest }} di situs ITS">
                            <span class="lab-mark" aria-hidden="true">
                                @if ($logo)
                                    <img src="{{ asset("images/labs/{$logo}") }}" alt="">
                                @else
                                    {{ $mark }}
                                @endif
                            </span>
                            <span class="index">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                            <span class="interest-copy"><strong>{{ $interest }}</strong><small>{{ $focus }}</small></span>
                            <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
                        </a>
                    @endforeach
                </div>
                <div class="lab-support-links" aria-label="Fasilitas laboratorium lainnya">
                    @foreach ([
                        ['Workshop Pemrograman 1', 'https://www.its.ac.id/informatika/workshop-pemrograman-1'],
                        ['Workshop Pemrograman 2', 'https://www.its.ac.id/informatika/workshop-pemrograman-2'],
                        ['Laboratorium Pascasarjana S2', 'https://www.its.ac.id/informatika/laboratorium-residensi-s2/'],
                        ['Laboratorium Pascasarjana S3', 'https://www.its.ac.id/informatika/laboratorium-residensi-s3/'],
                    ] as [$name, $url])
                        <a href="{{ $url }}" target="_blank" rel="noopener noreferrer">{{ $name }} <i class="bi bi-arrow-up-right" aria-hidden="true"></i></a>
                    @endforeach
                </div>
            </section>

            <section class="programs-section" aria-labelledby="programs-title" data-reveal>
                <div>
                    <p class="section-kicker">Program studi</p>
                    <h2 id="programs-title" class="display-5">Satu departemen, enam jalur pendidikan.</h2>
                    <p class="section-copy mt-3">Departemen menyediakan program pada jenjang sarjana, magister, dan doktoral, termasuk kelas internasional serta disiplin baru yang relevan dengan kebutuhan industri.</p>
                </div>
                <div class="program-list">
                    @foreach ([
                        ['S1', 'Teknik Informatika', 'Program Sarjana'],
                        ['IUP', 'Teknik Informatika', 'International Undergraduate Program'],
                        ['S1', 'Rekayasa Perangkat Lunak', 'Program Sarjana'],
                        ['S1', 'Rekayasa Kecerdasan Artifisial', 'Program Sarjana'],
                        ['S2', 'Teknik Informatika', 'Program Magister'],
                        ['S3', 'Ilmu Komputer', 'Program Doktor'],
                    ] as [$level, $name, $type])
                        <div class="program-item">
                            <span class="program-level">{{ $level }}</span>
                            <div><h3>{{ $name }}</h3><small>{{ $type }}</small></div>
                        </div>
                    @endforeach
                </div>
            </section>

            <section class="facility-showcase" aria-labelledby="facility-title" data-reveal>
                <div class="section-heading">
                    <div>
                        <p class="section-kicker">Ruang belajar &amp; berkarya</p>
                        <h2 id="facility-title">Fasilitas yang mendukung proses.</h2>
                    </div>
                    <p>Delapan laboratorium, dua workshop, ruang kelas, ruang sidang, aula, dan student center menjadi bagian dari keseharian akademik.</p>
                </div>

                <div id="facilityCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5500">
                    <div class="carousel-indicators">
                        @foreach ($facilities as $facility)
                            <button type="button" data-bs-target="#facilityCarousel" data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}" @if ($loop->first) aria-current="true" @endif aria-label="Tampilkan {{ $facility['title'] }}"></button>
                        @endforeach
                    </div>
                    <div class="carousel-inner">
                        @foreach ($facilities as $facility)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <div class="gallery-frame">
                                    <img src="{{ $facility['image'] }}" class="facility-image" alt="{{ $facility['title'] }}" loading="lazy">
                                    <div class="gallery-caption">
                                        <span class="gallery-count">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}/{{ str_pad(count($facilities), 2, '0', STR_PAD_LEFT) }}</span>
                                        <div><h3>{{ $facility['title'] }}</h3><p>{{ $facility['description'] }}</p></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#facilityCarousel" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Sebelumnya</span></button>
                    <button class="carousel-control-next" type="button" data-bs-target="#facilityCarousel" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Berikutnya</span></button>
                </div>
            </section>

            <section class="accreditation-panel" aria-labelledby="accreditation-title" data-reveal>
                <div>
                    <p class="eyebrow">Pengakuan mutu</p>
                    <h2 id="accreditation-title">S1 Teknik Informatika terakreditasi Unggul.</h2>
                    <p class="mb-0">Peringkat tertinggi dari LAM INFOKOM, berlaku sejak 26 November 2025 hingga 26 November 2030.</p>
                </div>
                <div class="accreditation-seal" aria-label="Akreditasi Unggul 2025 sampai 2030"><strong>UNGGUL<br><small>2025 / 2030</small></strong></div>
            </section>

            <section class="contact-strip" aria-labelledby="contact-title" data-reveal>
                <div>
                    <p class="section-kicker mb-2">Temukan Informatika ITS</p>
                    <h2 class="h3" id="contact-title">Jl. Teknik Kimia, Kampus ITS Sukolilo, Surabaya 60111</h2>
                    <p>Informasi akademik, penerimaan, penelitian, dan kegiatan terbaru tersedia di kanal resmi departemen.</p>
                </div>
                <a href="https://www.its.ac.id/informatika/" target="_blank" rel="noopener noreferrer" class="btn btn-dark px-4 py-3">Buka website resmi <i class="bi bi-arrow-up-right ms-2" aria-hidden="true"></i></a>
            </section>
        </div>
    </article>
@endsection
