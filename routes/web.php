<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Mahasiswa', function () {
    $data = Mahasiswa::all();
    return view('mahasiswa.index', compact('data'));
});

Route::get('/matakuliah', [MataKuliahController::class, 'index'])->name('matakuliah.index');

Route::get('/Artikel', [ArtikelController::class, 'index']);

Route::resource('mahasiswa', MahasiswaController::class);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return 'Dashboard Admin';
    })->name('dashboard');
});

Route::get('/sapa', function () {
    return view('sapa', [
    'nama' => 'Ahmad Fauzi',
    'kontenHtml' => '<strong>Teks Tebal</strong>',]);
});