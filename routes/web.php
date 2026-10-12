<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\SapaController;
use App\Http\Controllers\StatistikMahasiswaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\QueryBuilderDemoController;

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

Route::get('/profil', function () {
    return view('profil')
        ->with('nama', 'Naufal Allam')
        ->with('nim', 'NIM Anda')
        ->with('prodi', 'D4 Sistem Informasi Kota Cerdas');
    
});

Route::get('/statistik', function () {
    return view('akademik.statistik');
});

Route::get('/sapa-closure', function () {
    $nama = 'Ahmad Fauzi';
    $pesan = "Halo, {$nama}! Ini ditulis langsung di route.";
    return $pesan;
});

Route::get('/sapa-controller', [SapaController::class, 'index']);

Route::get('/mahasiswa-uji', function () {
    return view('mahasiswa.form-uji');
});
Route::post('/mahasiswa-uji', [MahasiswaController::class, 'store']);

Route::get('/mahasiswa-api', [MahasiswaController::class, 'apiIndex']);

Route::get('/statistik', StatistikMahasiswaController::class);

Route::get('/admin/dashboard', [DashboardController::class, 'index']);

Route::get('/demo/query-builder', [
    QueryBuilderDemoController::class, 'tampilkanSemua'
]);

Route::get('/demo/query-builder/filter', [
    QueryBuilderDemoController::class, 'tampilkanFilter'
]);

Route::get('/demo/statistik-prodi', [
    QueryBuilderDemoController::class, 'statistikProdi'
]);

Route::get('/demo/mahasiswa/tambah', [
    QueryBuilderDemoController::class, 'formTambah'
]);

Route::post('/demo/mahasiswa', [
    QueryBuilderDemoController::class, 'simpan'
]);

Route::get('/demo/mahasiswa/{id}/ubah', [
    QueryBuilderDemoController::class, 'ubah'
]);

Route::get('/demo/mahasiswa/{id}/hapus', [
    QueryBuilderDemoController::class, 'hapus'
]);
