<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

Route::get('/', [GameController::class, 'Beranda'])->name('beranda');
Route::get('/game', [GameController::class, 'index'])->name('game.index');
Route::get('/game/{nama}', [GameController::class, 'show'])->name('game.show');
