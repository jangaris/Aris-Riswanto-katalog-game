@extends('layout.app')

@section('title', 'Daftar Game')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-1">Daftar <span class="accent">Game</span></h2>
        <p style="color:#8c92b5;">Pilih salah satu game untuk melihat detailnya.</p>

        <div class="row g-4 mt-1">
            @foreach ($games as $key => $game)
                <div class="col-sm-6 col-lg-3">
                    <div class="card-game d-flex flex-column">
                        <img class="cover" src="{{ $game['gambar'] }}" alt="{{ $game['nama'] }}">
                        <div class="p-3 d-flex flex-column">
                            <h5 class="mb-2">{{ $game['nama'] }}</h5>
                            <span class="badge badge-genre align-self-start mb-2">{{ $game['genre'] }}</span>
                            <small style="color:#8c92b5;"><i class="bi bi-calendar3"></i> {{ $game['tahun'] }}</small>
                            <small class="mb-3" style="color:#8c92b5;"><i class="bi bi-display"></i>
                                {{ $game['platform'] }}</small>
                            <a href="{{ route('game.show', $key) }}" class="btn btn-accent btn-sm mt-auto">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection