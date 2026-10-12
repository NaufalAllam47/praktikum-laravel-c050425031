@extends('layouts.app')

@section('judul', 'Detail Mahasiswa')

@section('konten')
    <h1>Detail Mahasiswa</h1>

    <p><strong>NIM:</strong> {{ $mahasiswa->nim }}</p>
    <p><strong>Nama:</strong> {{ $mahasiswa->nama }}</p>
    <p><strong>Program Studi:</strong> {{ $mahasiswa->prodi }}</p>
    <p><strong>Semester:</strong> {{ $mahasiswa->semester }}</p>

    <h3>Daftar Nilai</h3>

    @forelse ($mahasiswa->nilaiMatakuliah as $n)
        <p>
            {{ $n->matakuliah->nama_mk ?? '-' }}:
            {{ $n->nilai ?? '-' }}
        </p>
    @empty
        <p>Belum ada data nilai.</p>
    @endforelse

    <a href="{{ route('mahasiswa.index') }}">Kembali</a>
@endsection
