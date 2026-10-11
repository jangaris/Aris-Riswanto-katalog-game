<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    private function dataGame(): array
    {
        return [
            'minecraft' => [
                'nama' => 'Minecraft',
                'genre' => 'Sandbox, Survival',
                'platform' => 'PC, Konsol, Mobile',
                'tahun' => 2011,
                'deskripsi' => 'Game sandbox berbasis blok di mana pemain bebas menambang, membangun, dan bertahan hidup di dunia yang dibuat secara acak. Cocok untuk bermain sendiri maupun bersama teman.',
                'gambar' => 'https://raw.githubusercontent.com/jangaris/kumpulanPoto/refs/heads/main/poto/download.jpg',
                'lingDonwnload' => 'https://www.minecraft.net/en-us',
            ],
            'the-witcher-3' => [
                'nama' => 'The Witcher 3: Wild Hunt',
                'genre' => 'Action RPG',
                'platform' => 'PC, PS4, Xbox One, Switch',
                'tahun' => 2015,
                'deskripsi' => 'Pemain berperan sebagai Geralt of Rivia, pemburu monster bayaran, dalam dunia terbuka yang luas dengan cerita yang kuat dan pilihan yang berdampak pada alur permainan.',
                'gambar' => 'https://raw.githubusercontent.com/jangaris/kumpulanPoto/refs/heads/main/poto/TW3.jpg',
                'lingDonwnload' => 'https://store.steampowered.com/app/292030/The_Witcher_3_Wild_Hunt/',
            ],
            'elden-ring' => [
                'nama' => 'Elden Ring',
                'genre' => 'Action RPG, Soulslike',
                'platform' => 'PC, PS4, PS5, Xbox',
                'tahun' => 2022,
                'deskripsi' => 'Game dunia terbuka dari FromSoftware dengan tantangan tinggi, eksplorasi bebas, dan latar dunia fantasi gelap hasil kolaborasi dengan George R. R. Martin.',
                'gambar' => 'https://raw.githubusercontent.com/jangaris/kumpulanPoto/refs/heads/main/poto/ER.jpg',
                'lingDonwnload' => 'https://store.steampowered.com/app/1245620/ELDEN_RING/',
            ],
            'stardew-valley' => [
                'nama' => 'Stardew Valley',
                'genre' => 'Simulasi, Farming',
                'platform' => 'PC, Konsol, Mobile',
                'tahun' => 2016,
                'deskripsi' => 'Pemain mewarisi sebuah ladang tua dan membangunnya menjadi pertanian yang sukses sambil berteman dengan warga desa, memancing, dan menjelajahi gua.',
                'gambar' => 'https://raw.githubusercontent.com/jangaris/kumpulanPoto/refs/heads/main/poto/SV.jpg',
                'lingDonwnload' => 'https://store.steampowered.com/app/413150/Stardew_Valley/',
            ],
            'genshin-impact' => [
                'nama' => 'Genshin Impact',
                'genre' => 'Action RPG, Open World',
                'platform' => 'PC, PS4, PS5, Mobile',
                'tahun' => 2020,
                'deskripsi' => 'Game dunia terbuka gratis dengan sistem elemen dan tim karakter. Pemain menjelajahi benua Teyvat sambil mengikuti perjalanan mencari saudara yang hilang.',
                'gambar' => 'https://raw.githubusercontent.com/jangaris/kumpulanPoto/refs/heads/main/poto/GI.jpg',
                'lingDonwnload' => 'https://genshin.hoyoverse.com/en/home',
            ],
            'valorant' => [
                'nama' => 'Valorant',
                'genre' => 'FPS, Taktis',
                'platform' => 'PC',
                'tahun' => 2020,
                'deskripsi' => 'Game tembak-menembak taktis 5 lawan 5 dengan agen yang memiliki kemampuan unik. Mengandalkan kerja sama tim, strategi, dan ketepatan tembakan.',
                'gambar' => 'https://raw.githubusercontent.com/jangaris/kumpulanPoto/refs/heads/main/poto/Va.jpg',
                'lingDonwnload' => 'https://playvalorant.com/en-us/download/',
            ],
            'hollow-knight' => [
                'nama' => 'Hollow Knight',
                'genre' => 'Metroidvania, Platformer',
                'platform' => 'PC, Konsol',
                'tahun' => 2017,
                'deskripsi' => 'Petualangan 2D di kerajaan serangga bawah tanah bernama Hallownest dengan pertarungan menantang, eksplorasi luas, dan suasana yang atmosferik.',
                'gambar' => 'https://raw.githubusercontent.com/jangaris/kumpulanPoto/refs/heads/main/poto/HK.jpg',
                'lingDonwnload' => 'https://store.steampowered.com/app/367520/Hollow_Knight/',
            ],
            'mobile-legends' => [
                'nama' => 'Mobile Legends: Bang Bang',
                'genre' => 'MOBA',
                'platform' => 'Android, iOS',
                'tahun' => 2016,
                'deskripsi' => 'Game MOBA 5 lawan 5 untuk perangkat mobile. Pemain memilih hero, bekerja sama dengan tim, dan berusaha menghancurkan base lawan dalam pertandingan singkat.',
                'gambar' => 'https://raw.githubusercontent.com/jangaris/kumpulanPoto/refs/heads/main/images.jpg',
                'lingDonwnload' => 'https://play.google.com/store/apps/details?id=com.mobile.legends&hl=id_ID&gl=LA',
            ],
        ];
    }

    public function Beranda()
    {
        return view(
            'layout.beranda',
            [
                'namaApp' => 'GameAris',
                'tema' => 'GameTerkini',
                'deskripsi' => 'GameAris adalah situs web yang menyediakan informasi terkini tentang berbagai game populer, termasuk deskripsi, genre, platform, dan tahun rilisnya. Temukan game favoritmu dan jelajahi dunia gaming dengan mudah di GameAris.',
                'dataGame' => count($this->dataGame()),
            ]
        );
    }

    public function index()
    {
        return view('game.index', [
            'games' => $this->dataGame(),
        ]);
    }

    public function show(string $nama)
    {
        $games = $this->dataGame();
        return view('game.show', [
            'nama' => $nama,
            'game' => $games[$nama],
        ]);
    }
}
