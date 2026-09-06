<?php

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class PageTest extends TestCase
{
    public function test_profile_pages_render_with_shared_navigation(): void
    {
        foreach (['/' => 'Kelompok 1', '/about' => 'Teknik Informatika ITS', '/project-idea' => 'ITS Academic Assistant'] as $url => $text) {
            $this->get($url)
                ->assertOk()
                ->assertSeeText($text)
                ->assertSeeText('Kelompok 1 - Teknik Informatika ITS')
                ->assertSee('aria-current="page"', false);
        }

        $this->get('/')
            ->assertSeeText('Enam orang, minat yang beragam')
            ->assertSeeText('6 mahasiswa')
            ->assertSeeText('Nama Anggota 6')
            ->assertSeeText('Koordinator proyek');
    }

    #[DataProvider('calculations')]
    public function test_calculator_outputs_results_and_safe_errors(string $url, string $expected): void
    {
        $this->get($url)->assertOk()->assertSeeText($expected);
    }

    public static function calculations(): array
    {
        return [
            'addition' => ['/hitung/10/5/tambah', 'Hasil dari 10 tambah 5 adalah 15'],
            'subtraction' => ['/hitung/10/5/kurang', 'Hasil dari 10 kurang 5 adalah 5'],
            'multiplication' => ['/hitung/10/5/kali', 'Hasil dari 10 kali 5 adalah 50'],
            'division' => ['/hitung/10/5/bagi', 'Hasil dari 10 bagi 5 adalah 2'],
            'decimals' => ['/hitung/2.5/2/kali', 'Hasil dari 2.5 kali 2 adalah 5'],
            'negative numbers' => ['/hitung/-10/5/tambah', 'Hasil dari -10 tambah 5 adalah -5'],
            'zero result' => ['/hitung/5/5/kurang', 'Hasil dari 5 kurang 5 adalah 0'],
            'division by zero' => ['/hitung/10/0/bagi', 'Pembagian dengan nol tidak dapat dilakukan.'],
            'decimal zero divisor' => ['/hitung/10/0.0/bagi', 'Pembagian dengan nol tidak dapat dilakukan.'],
            'invalid operation' => ['/hitung/10/5/pangkat', 'Operasi tidak valid.'],
            'invalid operand' => ['/hitung/abc/5/tambah', 'Kedua angka harus berupa nilai numerik'],
            'oversized operand' => ['/hitung/1e309/5/tambah', 'Angka terlalu besar.'],
            'overflow' => ['/hitung/1e308/1e308/kali', 'Hasil perhitungan terlalu besar'],
        ];
    }
}
