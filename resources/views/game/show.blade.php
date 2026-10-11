@extends('layout.app')

@section('title', $game['nama'])

@section('content')
    <div class="container mt-5">
        <a href="{{ route('game.index') }}" class="btn btn-outline-light btn-sm mb-4">
            <i class="bi bi-arrow-left"></i> Kembali ke Daftar Game
        </a>

        <div class="row g-4">
            <div class="col-md-5">
                <img class="cover rounded-4" style="height:360px;" src="{{ $game['gambar'] }}" alt="{{ $game['nama'] }}">
            </div>
            <div class="col-md-7">
                <h1 class="fw-bold">{{ $game['nama'] }}</h1>
                <span class="badge badge-genre fs-6 mb-3">{{ $game['genre'] }}</span>

                <div class="row mb-3">
                    <div class="col-6">
                        <div class="meta-label">Platform</div>
                        <div>{{ $game['platform'] }}</div>
                    </div>
                    <div class="col-6">
                        <div class="meta-label">Tahun Rilis</div>
                        <div>{{ $game['tahun'] }}</div>
                    </div>
                </div>

                <div class="meta-label">Deskripsi</div>
                <p style="color:#c9cde4; line-height:1.7;">{{ $game['deskripsi'] }}</p>
                <a href="{{ $game['lingDonwnload'] }}" class="btn btn-accent btn-sm mt-auto">Download
                    Game</a>
            </div>
        </div>
    </div>
@endsection