@extends('layouts.app')

@section('judul', 'Daftar Mahasiswa')

@section('konten')
    <h1>DAFTAR MAHASISWA</h1>
    <table border="1" cellpadding="8" cellspacing="0">
          <nav>
        <a href="{{ route('mahasiswa.index') }}">Mahasiswa</a> |
        <a href="{{ route('matakuliah.index') }}">Mata Kuliah</a>
    </nav>

        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($mahasiswa as $mhs)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mhs->nim ?? 'NIM tidak tersedia' }}</td>
                <td>{{ $mhs->nama ?? 'Nama tidak tersedia' }}</td>
                <td>{{ $mhs->prodi ?? 'Program Studi tidak tersedia' }}</td>
                <td><a href="{{ route('mahasiswa.show', $mhs->id) }}">Detail</a></td>
            </tr>
            @empty
            <tr><td colspan="5">Belum ada data mahasiswa.</td></tr>
            @endforelse
        </tbody>
    </table>

    <h2>Pengujian XSS</h2>

    <p>Menggunakan @{{}}:</p>
    <p>{{"<script>alert('XSS')</script>"}}</p>

    <p>Menggunakan @{!! !!}:</p>
    <p>{!! "<script>alert('XSS')</script>" !!}</p>
@endsection