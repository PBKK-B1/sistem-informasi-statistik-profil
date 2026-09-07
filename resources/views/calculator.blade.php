@extends('layouts.app')

@section('title', 'Kalkulator')

@section('content')
    <section class="calculator-shell" aria-labelledby="calculator-title">
        <div class="calculator-intro">
            <div>
                <p class="eyebrow">Challenge bonus</p>
                <h1 id="calculator-title">Hitung cepat, tanpa mengubah URL.</h1>
                <p>Masukkan dua angka, pilih operasi, lalu biarkan route Laravel memproses hasilnya.</p>
            </div>
            <div class="formula-decoration" aria-hidden="true">× ÷<br>+ −</div>
        </div>
        <div class="calculator-workspace">
            <p class="section-kicker">Kalkulator sederhana</p>
            <form class="calculator-form" data-calculator-form>
                <div>
                    <label class="form-label" for="angka1">Angka pertama</label>
                    <input class="form-control" id="angka1" name="angka1" type="number" step="any" value="{{ $angka1 }}" required>
                </div>
                <div>
                    <label class="form-label" for="operasi">Operasi</label>
                    <select class="form-select" id="operasi" name="operasi" aria-label="Pilih operasi">
                        @foreach (['tambah' => '+', 'kurang' => '−', 'kali' => '×', 'bagi' => '÷'] as $value => $symbol)
                            <option value="{{ $value }}" @selected($operasi === $value)>{{ $symbol }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="form-label" for="angka2">Angka kedua</label>
                    <input class="form-control" id="angka2" name="angka2" type="number" step="any" value="{{ $angka2 }}" required>
                </div>
                <button class="btn btn-primary calculator-submit" type="submit">Hitung hasil <i class="bi bi-arrow-right ms-2" aria-hidden="true"></i></button>
            </form>

            @if ($error)
                <div class="result-panel error" role="alert">
                    <span class="result-label">Perhitungan tidak dapat diproses</span>
                    <span class="result-value text-danger">{{ $error }}</span>
                </div>
            @else
                <div class="result-panel" aria-live="polite">
                    <span class="result-label">Hasil {{ $angka1 }} {{ ['tambah' => '+', 'kurang' => '−', 'kali' => '×', 'bagi' => '÷'][$operasi] ?? $operasi }} {{ $angka2 }}</span>
                    <output class="result-value">{{ $hasil }}</output>
                    <span class="visually-hidden">Hasil dari {{ $angka1 }} {{ $operasi }} {{ $angka2 }} adalah {{ $hasil }}</span>
                </div>
            @endif

            <div class="operation-links" aria-label="Contoh perhitungan">
                @foreach (['tambah' => '10 + 5', 'kurang' => '10 − 5', 'kali' => '10 × 5', 'bagi' => '10 ÷ 5'] as $operation => $example)
                    <a class="operation-link" href="{{ route('calculator', ['angka1' => 10, 'angka2' => 5, 'operasi' => $operation]) }}"><i class="bi bi-lightning-charge-fill" aria-hidden="true"></i>{{ $example }}</a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
