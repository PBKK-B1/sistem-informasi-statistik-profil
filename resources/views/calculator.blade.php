@extends('layouts.app')

@section('title', 'Kalkulator')

@section('content')
    <header class="mb-4">
        <p class="eyebrow">Challenge Bonus</p>
        <h1 class="display-6 fw-bold">Kalkulator sederhana</h1>
        <p class="text-muted fs-5">Coba operasi tambah, kurang, kali, dan bagi melalui alamat halaman.</p>
    </header>
    <div class="row g-4">
        <div class="col-lg-7">
            <section class="card h-100"><div class="card-body p-4 p-md-5">
                <h2 class="h5 mb-4">Hasil perhitungan</h2>
                @if ($error)
                    <div class="alert alert-danger mb-0" role="alert">
                        <h3 class="h6 fw-bold">Perhitungan tidak dapat diproses</h3>
                        <p class="mb-0">{{ $error }}</p>
                    </div>
                @else
                    <p class="eyebrow">{{ $operasi }}</p>
                    <p class="fs-3 fw-semibold text-break mb-0">Hasil dari {{ $angka1 }} {{ $operasi }} {{ $angka2 }} adalah {{ $hasil }}</p>
                @endif
            </div></section>
        </div>
        <div class="col-lg-5">
            <section class="card h-100"><div class="card-body p-4">
                <h2 class="h5 mb-3">Cara menggunakan</h2>
                <p class="text-muted">Ubah kedua angka dan nama operasi pada URL berikut. Untuk angka desimal, gunakan titik; misalnya <code>2.5</code>.</p>
                <p class="bg-light border rounded p-3 text-break"><code>/hitung/{angka1}/{angka2}/{operasi}</code></p>
                <p class="small text-muted mb-0">Contoh: <code>/hitung/10/5/kali</code> menghasilkan 50. Pembagian dengan nol akan menampilkan pesan kesalahan.</p>
            </div></section>
        </div>
    </div>
    <section class="mt-4">
        <h2 class="h5 mb-3">Coba operasi lainnya</h2>
        <div class="d-flex flex-wrap gap-2">
            @foreach (['tambah' => '10 + 5', 'kurang' => '10 − 5', 'kali' => '10 × 5', 'bagi' => '10 ÷ 5'] as $operation => $example)
                <a class="btn btn-outline-primary px-4" href="{{ route('calculator', ['angka1' => 10, 'angka2' => 5, 'operasi' => $operation]) }}">{{ $example }} <span class="visually-hidden">({{ $operation }})</span></a>
            @endforeach
        </div>
    </section>
@endsection
