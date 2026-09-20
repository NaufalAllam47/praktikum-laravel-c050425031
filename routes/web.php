<?php

use App\Models\Mahasiswa;

Route::get('/Mahasiswa', function () {
    $data = Mahasiswa::all();
    return view('mahasiswa.index', compact('data'));
});
