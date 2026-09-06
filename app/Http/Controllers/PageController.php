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
                    'name' => 'Nama Anggota 1', 'nrp' => 'NRP belum diisi', 'class' => 'Kelas belum diisi',
                    'interest' => 'Pemrograman web', 'role' => 'Pengembang antarmuka',
                    'bio' => 'Saya suka merapikan tampilan supaya informasi mudah dibaca dan enak dipakai.',
                    'photo' => 'images/members/anggota-1.jpg', 'education' => 'Nama sekolah dan kampus belum diisi',
                    'work' => 'Belum diisi', 'organization' => 'Belum diisi',
                    'skills' => ['HTML', 'CSS', 'Laravel'], 'achievements' => 'Belum diisi', 'linkedin' => null,
                ],
                [
                    'name' => 'Nama Anggota 2', 'nrp' => 'NRP belum diisi', 'class' => 'Kelas belum diisi',
                    'interest' => 'Data dan analisis', 'role' => 'Pengolah data',
                    'bio' => 'Saya senang melihat data yang berantakan jadi sesuatu yang jelas dan berguna.',
                    'photo' => 'images/members/anggota-2.jpg', 'education' => 'Nama sekolah dan kampus belum diisi',
                    'work' => 'Belum diisi', 'organization' => 'Belum diisi',
                    'skills' => ['Python', 'SQL', 'Analisis data'], 'achievements' => 'Belum diisi', 'linkedin' => null,
                ],
                [
                    'name' => 'Nama Anggota 3', 'nrp' => 'NRP belum diisi', 'class' => 'Kelas belum diisi',
                    'interest' => 'Kecerdasan buatan', 'role' => 'Perancang alur AI',
                    'bio' => 'Saya tertarik memikirkan bagaimana AI bisa membantu tanpa membuat prosesnya jadi rumit.',
                    'photo' => 'images/members/anggota-3.jpg', 'education' => 'Nama sekolah dan kampus belum diisi',
                    'work' => 'Belum diisi', 'organization' => 'Belum diisi',
                    'skills' => ['Python', 'Machine learning', 'Riset'], 'achievements' => 'Belum diisi', 'linkedin' => null,
                ],
                [
                    'name' => 'Nama Anggota 4', 'nrp' => 'NRP belum diisi', 'class' => 'Kelas belum diisi',
                    'interest' => 'Desain pengalaman pengguna', 'role' => 'Perancang pengalaman pengguna',
                    'bio' => 'Saya perhatikan detail kecil yang bikin sebuah aplikasi terasa nyaman dipakai.',
                    'photo' => 'images/members/anggota-4.jpg', 'education' => 'Nama sekolah dan kampus belum diisi',
                    'work' => 'Belum diisi', 'organization' => 'Belum diisi',
                    'skills' => ['Figma', 'UI design', 'User research'], 'achievements' => 'Belum diisi', 'linkedin' => null,
                ],
                [
                    'name' => 'Nama Anggota 5', 'nrp' => 'NRP belum diisi', 'class' => 'Kelas belum diisi',
                    'interest' => 'Basis data', 'role' => 'Pengelola basis data',
                    'bio' => 'Saya suka menyusun struktur data yang rapi supaya informasi mudah dicari lagi.',
                    'photo' => 'images/members/anggota-5.jpg', 'education' => 'Nama sekolah dan kampus belum diisi',
                    'work' => 'Belum diisi', 'organization' => 'Belum diisi',
                    'skills' => ['MySQL', 'Database design', 'PHP'], 'achievements' => 'Belum diisi', 'linkedin' => null,
                ],
                [
                    'name' => 'Nama Anggota 6', 'nrp' => 'NRP belum diisi', 'class' => 'Kelas belum diisi',
                    'interest' => 'Manajemen proyek', 'role' => 'Koordinator proyek',
                    'bio' => 'Saya menikmati membagi tugas dan menjaga ritme kerja tim tetap jalan.',
                    'photo' => 'images/members/anggota-6.jpg', 'education' => 'Nama sekolah dan kampus belum diisi',
                    'work' => 'Belum diisi', 'organization' => 'Belum diisi',
                    'skills' => ['Project management', 'Komunikasi', 'Presentasi'], 'achievements' => 'Belum diisi', 'linkedin' => null,
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
