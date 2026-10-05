<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Mahasiswa', function () {
    $data = Mahasiswa::all();
    return view('mahasiswa.index', compact('data'));
});

Route::get('/matakuliah', [MataKuliahController::class, 'index'])->name('matakuliah.index');
Route::get('matakuliah/{kode_mk}', [MataKuliahController::class, 'show'])->name('matakuliah.show');

Route::get('/Artikel', [ArtikelController::class, 'index']);

Route::resource('mahasiswa', MahasiswaController::class);

Route::resource('matakuliah', MataKuliahController::class)->only(['index', 'create', 'store', 'show']);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return 'Dashboard Admin';
    })->name('dashboard');
});

Route::prefix('akademik')->name('akademik.')->group(function () {
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');

    Route::get('/matakuliah', [MataKuliahController::class, 'index'])->name('matakuliah.index');
    Route::get('/matakuliah/{kode_mk}', [MataKuliahController::class, 'show'])->name('matakuliah.show');

    });

Route::get('/sapa', function () {
    return view('sapa', [
    'nama' => 'Ahmad Fauzi',
    'kontenHtml' => '<strong>Teks Tebal</strong>',]);
});