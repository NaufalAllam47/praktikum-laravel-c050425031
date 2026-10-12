
@extends('layouts.app')

@section('judul', 'Tambah Mahasiswa')

@section('konten')
    <h1>Tambah Data Mahasiswa</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf

        <label>NIM</label><br>
        <input type="text" name="nim"
               value="{{ old('nim') }}" required>
        <br><br>

        <label>Nama</label><br>
        <input type="text" name="nama"
               value="{{ old('nama') }}" required>
        <br><br>

        <label>Email</label><br>
        <input type="email" name="email"
               value="{{ old('email') }}" required>
        <br><br>

        <label>Program Studi</label><br>
        <input type="text" name="prodi"
               value="{{ old('prodi') }}" required>
        <br><br>

        <label>Semester</label><br>
        <input type="number" name="semester"
               value="{{ old('semester') }}" min="1" required>
        <br><br>

        <button type="submit">Simpan</button>
        <a href="{{ route('mahasiswa.index') }}">Kembali</a>
    </form>
@endsection
