<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Http\Controllers\ArtikelController;

Route::get('/Mahasiswa', function () {
    $data = Mahasiswa::all();
    return view('mahasiswa.index', compact('data'));
});

Route::get('/Artikel', [ArtikelController::class, 'index']);


