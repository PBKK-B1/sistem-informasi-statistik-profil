<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function index(): View
    {
        return view('home', [
            'students' => [
                [
                    'name' => 'Mitra Partogi',
                    'nrp' => '5025241017',
                    'origin' => 'Surabaya, Jawa Timur',
                    'interest' => 'Pemrograman kompetitif & Data Science',
                    'role' => 'Front End Engineer',
                    'bio' => 'Saya adalah mahasiswa semester 5 Program Studi Teknik Informatika ITS yang tertarik menjadi programmer andal di bidang pemrograman kompetitif dan sains data.',
                    'photo' => 'images/members/anggota-1.jpg',
                    'education' => [
                        'Institut Teknologi Sepuluh Nopember (ITS) - S1 Teknik Informatika (2024 - Sekarang)',
                        'SMAN 15 Surabaya - MIPA (2021 - 2024)',
                    ],
                    'work' => [
                        // 'Dinas Pendidikan Jawa Timur (Mei 2026 - Juli 2026) - Front End Engineer - Mengembangkan sistem PPDB/SPMB Jawa Timur berskala provinsi dengan arsitektur monorepo Next.js, React, dan TypeScript.',
                        'Institut Teknologi Sepuluh Nopember (Agustus 2026 - Sekarang) - Asisten Dosen Dasar Pemrograman (C)',
                        'Institut Teknologi Sepuluh Nopember (Februari 2026 - Juli 2026) - Asisten Dosen Sistem Operasi & Asisten Dosen Struktur Data (C/C++)',
                        'Institut Teknologi Sepuluh Nopember (September 2025 - Desember 2025) - Asisten Dosen Dasar Pemrograman (C)',
                    ],
                    'organization' => [
                        'INCLENATION 2025 (Jul 2025 - Agu 2025) - Staff Mentor - Pengenalan lingkungan FTEIC ITS bagi mahasiswa baru',
                        'Schematics ITS 2025 (Mar 2025 - Sekarang) - Staff NPC - National Programming Contest',
                        'Barunastra ITS (Nov 2024 - Feb 2025) - Programmer Magang - Sistem visual dan kontrol roboboat autonomous',
                        'Schematics ITS 2024 (Okt 2024) - Magang Staff NLC (National Logic Competition)',
                        'SKK LIBELS (Jan 2022 - Jan 2023) - Wakil Ketua - Organisasi Siswa Kristen SMAN 15 Surabaya',
                        'DHELIBELS (Agu 2022 - Apr 2024) - Duta Hemat Energi - Program KESDM RI & IIEE',
                    ],
                    'skills' => ['C/C++', 'Python', 'HTML', 'TypeScript', 'Next.js', 'React', 'Microsoft Office', 'Google Spreadsheets'],
                    'achievements' => [
                        'Juara 1 Competitive Programming - PINGFEST UNS 2025',
                        'Juara 1 Duta Hemat Energi Jawa Timur 2023 (IIEE, KESDM RI, APEC)',
                        'Pembicara Utama di APEC Youngsters Forum (Mei 2023)',
                        'Juara 1 International Brain Challenge 2024 (Telkom University)',
                        'Juara 2 Nachrichten Lesen Nasional 2023 (UNESA)',
                        'Finalis Electra 2023 (Teknik Elektro ITS)',
                    ],
                    'linkedin' => 'http://www.linkedin.com/in/mitra-partogi',
                ],
                [
                    'name' => 'Dimas Setiaji',
                    'nrp' => '5025241056', 
                    'origin' => 'Malang, Jawa Timur',
                    'interest' => 'Software Development, Game Development, dan Interactive Systems',
                    'role' => 'Software Developer',
                    'bio' => 'Motivated to contribute to interactive projects and continuously improving technical and creative skills.',
                    'photo' => 'images/members/anggota-2.png',
                    'education' => [
                        'SMA Negeri 1 Kepanjen (2021 - 2024)',
                        'Institut Teknologi Sepuluh Nopember (2024 - Sekarang)'
                    ],
                    'work' => [
                        'Teaching Assistant Dasar Pemrograman & Struktur Data ITS (2025 - Sekarang)',
                        'OSN Informatics Mentor SMAN 1 Kepanjen (2023 - 2024)',
                        'Assistant Mentor SSA Organization Malang (2024)'
                    ],
                    'organization' => [
                        'Problem Setter & Liaison Officer National Programming Competition ITS (2025)',
                        'Anggota Karya Ilmiah Remaja (KIR) Kabupaten Malang (2023 - 2024)',
                        'Anggota OSN Informatics Club Kabupaten Malang (2022 - 2023)'
                    ],
                    'skills' => [
                        'C', 'C++', 'C#', 'HTML', 'CSS', 'UI/UX Design', 'Figma', 'Game Mechanics Design'
                    ],
                    'achievements' => [
                    ],
                    'linkedin' => 'https://www.linkedin.com/in/dimas-setiaji-596b33335/',
                ],
                [
                    'name' => 'Steven Alvin Christian',
                    'nrp' => '5025241116',
                    'origin' => 'Bontang, Kalimantan Timur',

                    'interest' => 'Data Scientist & AI Engineer',
                    'role' => '',

                    'bio' => 'Mahasiswa Teknik Informatika ITS yang tertarik pada bidang Data Science, Artificial Intelligence, dan Machine Learning.',

                    'photo' => 'images/members/anggota-3.png',

                    'education' => [
                        "Institut Teknologi Sepuluh Nopember (2024 - Sekarang)",
                        "SMA YPVDP Bontang (2021 - 2024)",
                    ],

                    'work' => [
                        "Koordinator Asisten Dosen Dasar Pemrograman ITS (Agu 2026 - Sekarang) ",
                        "Asisten Dosen Struktur Data ITS (Feb 2026 - Juli 2026)",
                        "Asisten Dosen Dasar Pemrograman ITS (Agu 2025 - Des 2025)",
                        "Asisten Dosen Kalkulus 1 ITS (Agu 2025 - Des 2025)",
                    ],

                    'organization' => [
                        "Expert Staff Schematics NPC (Apr 2026 - Sekarang)",
                    ],

                    'skills' => [
                        'Python',
                        'C/C++',
                        'SQL',
                        'Tableau',
                        'Microsoft Office',
                    ],
                    'achievements' => [
                        "Winner Energy Policy Case Competition 2025",
                        "Best 30 Awardee PFMuda Social Innovation 2025",
                        "Finalist Schematics National Programming Contest Senior 2024",
                    ],

                    'linkedin' => 'http://www.linkedin.com/in/stevenalvinchristian',
                ],
                [
                    'name' => 'Frenaldy Bestabba Hasugian', 'nrp' => '5025241156', 'origin' => 'Pontianak, Kalimantan Barat',
                    'interest' => 'software engineer & Cyber Security', 'role' => '',
                    'bio' => 'Saya adalah mahasiswa semester 4 Program Studi Teknik Informatika ITS yang tertarik menjadi profesional di bidang software engineer.',
                    'photo' => 'images/members/anggota-4.png',
                    'education' => [
                        "Institut Teknologi Sepuluh Nopember (ITS)\nS1 Teknik Informatika (2024 - Sekarang) · IPK: 3.61/4.00",
                        "SMAN 1 Pontianak\nMIPA (2020 - 2023) · Nilai: 89.98/100.00",
                    ],
                    'work' => [
                        "Asisten Dosen Struktur Data (C/C++)",
                        "Asisten Dosen Dasar Pemrograman (C)",
                    ],
                    'organization' => [
                        'Staf Divisi Riset dan Teknologi, Himpunan Mahasiswa Teknik Computer-Informatika ITS (2024-sekarang)',
                    ],
                    'skills' => ['C/C++'],
                    'achievements' => [],
                    'linkedin' => 'http://www.linkedin.com/in/frenaldyh',
                ],
                [
                    'name' => 'Nama Anggota 5', 'nrp' => 'NRP belum diisi', 'origin' => 'Asal daerah belum diisi',
                    'interest' => 'Data dan analisis', 'role' => 'Pengolah data',
                    'bio' => 'Saya senang melihat data yang berantakan jadi sesuatu yang jelas dan berguna.',
                    'photo' => 'images/members/anggota-2.jpg', 
                    'education' => ['Nama sekolah dan kampus belum diisi'],
                    'work' => ['Belum diisi'], 
                    'organization' => ['Belum diisi'],
                    'skills' => ['Python', 'SQL', 'Analisis data'], 
                    'achievements' => ['Belum diisi'], 'linkedin' => null,
                ],
                [
                    'name' => 'Isabella Sienna Sulisthio', 'nrp' => '5025241199', 'origin' => 'Banjarmasin, Kalimantan Selatan',
                    'interest' => 'AI dan Computer Vision', 'role' => 'Pengolah data',
                    'bio' => 'Saya adalah mahasiswa semester 4 Program Studi Teknik Informatika ITS yang tertarik di bidang AI khususnya Computer Vision.',
                    'photo' => 'images/members/anggota-6.png', 
                    'education' => ['SMA Kristen Kanaan Banjarmasin (2021 - 2024)', 'Institut Teknologi Sepuluh Nopember (2024 - Sekarang)'],
                    'work' => ['Asisten Dosen Dasar Pemrograman 2025', 'Asisten Dosen Struktur Data 2026','Asisten Dosen Dasar Pemrograman 2026', 'Administrator Laboratorium ALPRO (Algoritma dan Pemrogaman) ITS'], 
                    'organization' => ['Wakil Kepala Biro Pengembangan Keilmiahan Departemen Riset dan Teknologi Himpunan Mahasiswa Teknik Computer-Informatika (HMTC) ITS', 'Staf Ahli UI/UX Divisi ITDEV Schematics ITS 2026','Kepala Divisi Website 3C KMK ITS 2026', 'Kepala Divisi Finance Forum Daerah Kalimantan Selatan WASAKA ITS tahun 2025','Staf website 3C KMK ITS 2025'],
                    'skills' => ['C', 'C++', 'SQL', 'Python', 'Web Programming', 'Figma', 'Canva', 'Microsoft Office', 'Lainnya'], 
                    'achievements' => ['Juara 9 OSN-K Kota Banjarmasin Bidang Informatika Tahun 2023'], 'linkedin' => 'https://www.linkedin.com/in/isabellasienna',
                ],
            ],
        ]);
    }

    public function about(): View
    {
        return view('about', [
            'facilities' => [
                [
                    'title' => 'Ruang kelas dan diskusi',
                    'description' => 'Tempat untuk belajar bareng, presentasi tugas, dan ngobrol santai setelah kelas.',
                    'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1200&q=80',
                ],
                [
                    'title' => 'Laboratorium komputasi',
                    'description' => 'Ruang yang biasa dipakai untuk praktikum, eksperimen, dan pengerjaan proyek.',
                    'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1200&q=80',
                ],
                [
                    'title' => 'Area kolaborasi',
                    'description' => 'Ruang yang cocok buat diskusi singkat, kerja kelompok, atau menyiapkan ide tugas.',
                    'image' => 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1200&q=80',
                ],
            ],
        ]);
    }

    public function project(): View
    {
        return view('project');
    }

    public function calculate(string $angka1, string $angka2, string $operasi): View
    {
        $hasil = null;
        $error = null;

        if (! in_array($operasi, ['tambah', 'kurang', 'kali', 'bagi'], true)) {
            $error = 'Operasi tidak valid. Gunakan tambah, kurang, kali, atau bagi.';
        } elseif (! is_numeric($angka1) || ! is_numeric($angka2)) {
            $error = 'Kedua angka harus berupa nilai numerik yang valid.';
        } elseif (! is_finite((float) $angka1) || ! is_finite((float) $angka2)) {
            $error = 'Angka terlalu besar. Gunakan angka dalam rentang yang lebih kecil.';
        } elseif ($operasi === 'bagi' && (float) $angka2 === 0.0) {
            $error = 'Pembagian dengan nol tidak dapat dilakukan. Gunakan pembagi selain nol.';
        } else {
            $hasil = match ($operasi) {
                'tambah' => (float) $angka1 + (float) $angka2,
                'kurang' => (float) $angka1 - (float) $angka2,
                'kali' => (float) $angka1 * (float) $angka2,
                'bagi' => (float) $angka1 / (float) $angka2,
            };

            if (! is_finite($hasil)) {
                $hasil = null;
                $error = 'Hasil perhitungan terlalu besar untuk ditampilkan.';
            }
        }

        return view('calculator', compact('angka1', 'angka2', 'operasi', 'hasil', 'error'));
    }
}
