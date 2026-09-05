<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function index(): View
    {
        return view('home', [
            'student' => [
                'name' => 'Mitra Partogi',
                'nrp' => '5025241017',
                'department' => 'Teknik Informatika ITS',
                'status' => 'Mahasiswa Aktif',
            ],
        ]);
    }

    public function about(): View
    {
        return view('about');
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
