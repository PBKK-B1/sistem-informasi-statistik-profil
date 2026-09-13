@extends('layouts.app')

@section('title', 'Profil ' . $student['name'])

@section('content')
    <section class="py-5" aria-labelledby="student-title">
        <a class="btn btn-outline-secondary mb-4" href="{{ route('home') }}">
            <i class="bi bi-arrow-left me-2" aria-hidden="true"></i>Kembali ke profil kelompok
        </a>

        <article class="card border-0 shadow-sm overflow-hidden">
            <div class="card-body p-4 p-lg-5">
                <div class="row g-4 align-items-start">
                    <div class="col-md-auto text-center">
                        @if (! empty($student['photo']) && file_exists(public_path($student['photo'])))
                            <img class="profile-photo" src="{{ asset($student['photo']) }}" alt="Foto {{ $student['name'] }}">
                        @else
                            <img class="profile-photo" src="{{ asset('images/members/default-profile.svg') }}" alt="Foto profil default">
                        @endif
                    </div>
                    <div class="col">
                        <p class="eyebrow">Profil mahasiswa</p>
                        <h1 id="student-title">{{ $student['name'] }}</h1>
                        <p class="lead mb-2">NRP {{ $student['nrp'] }} · {{ $student['origin'] }}</p>
                        <p>{{ $student['bio'] }}</p>
                        @if (! empty($student['linkedin']))
                            <a class="btn btn-primary" href="{{ $student['linkedin'] }}" target="_blank" rel="noopener noreferrer">
                                <i class="bi bi-linkedin me-1" aria-hidden="true"></i>LinkedIn
                            </a>
                        @endif
                    </div>
                </div>

                <div class="row g-4 mt-1">
                    @foreach ([
                        ['Pendidikan', $student['education']],
                        ['Pengalaman profesional', $student['work']],
                        ['Organisasi & kepanitiaan', $student['organization']],
                        ['Prestasi & penghargaan', $student['achievements']],
                    ] as [$title, $items])
                        <section class="col-md-6">
                            <h2 class="h5">{{ $title }}</h2>
                            @if (count(array_filter($items)))
                                <ul class="mb-0">
                                    @foreach (array_filter($items) as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="text-muted mb-0">Belum ada informasi yang ditambahkan.</p>
                            @endif
                        </section>
                    @endforeach
                    <section class="col-12">
                        <h2 class="h5">Keahlian teknis</h2>
                        <div class="d-flex flex-wrap gap-2">
                            @foreach ($student['skills'] as $skill)
                                <span class="skill-chip">{{ $skill }}</span>
                            @endforeach
                        </div>
                    </section>
                </div>
            </div>
        </article>
    </section>
@endsection
