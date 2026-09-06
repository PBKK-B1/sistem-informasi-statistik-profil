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
                    'name' => 'Nama Anggota 2', 'nrp' => 'NRP belum diisi', 'origin' => 'Asal daerah belum diisi',
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
                    'name' => 'Nama Anggota 2', 'nrp' => 'NRP belum diisi', 'origin' => 'Asal daerah belum diisi',
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
                    'name' => 'Nama Anggota 3', 'nrp' => 'NRP belum diisi', 'origin' => 'Asal daerah belum diisi',
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
                    'name' => 'Nama Anggota 4', 'nrp' => 'NRP belum diisi', 'origin' => 'Asal daerah belum diisi',
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
                    'bio' => 'The only thing that is impossible is impossibility',
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
