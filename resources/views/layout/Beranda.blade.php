@extends('layout.app')

@section('title', 'Beranda')

@section('content')
    <section class="hero">
        <div class="container text-center">
            <p class="meta-label mb-2">{{ $tema }}</p>
            <h1>Selamat datang di <span class="accent">{{ $namaApp }}</span></h1>
            <p class="lead mx-auto mt-3" style="max-width: 680px; color:#c9cde4;">{{ $deskripsi }}</p>
            <p class="mt-3"><span class="badge badge-genre fs-6">{{ $dataGame }} game tersedia</span></p>
            <a href="{{ route('game.index') }}" class="btn btn-accent btn-lg mt-3 px-4">
                Lihat Daftar Game <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </section>

    <section class="container mt-5">
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="card-game p-4">
                    <i class="bi bi-tags accent fs-1"></i>
                    <h5 class="mt-2">Beragam Genre</h5>
                    <p class="mb-0" style="color:#c9cde4;">RPG, FPS, MOBA, simulasi, dan banyak lagi.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-game p-4">
                    <i class="bi bi-pc-display accent fs-1"></i>
                    <h5 class="mt-2">Multi Platform</h5>
                    <p class="mb-0" style="color:#c9cde4;">PC, konsol, hingga mobile.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-game p-4">
                    <i class="bi bi-info-circle accent fs-1"></i>
                    <h5 class="mt-2">Info Lengkap</h5>
                    <p class="mb-0" style="color:#c9cde4;">Tahun rilis, platform, dan deskripsi tiap game.</p>
                </div>
            </div>
        </div>
    </section>
@endsection