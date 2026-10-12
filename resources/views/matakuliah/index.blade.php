@extends('layouts.app')

@section('judul', 'Daftar Mata Kuliah')

@section('konten')

<h1>Daftar Mata Kuliah</h1>

<nav>
    <a href="{{ route('mahasiswa.index') }}">Mahasiswa</a> |
    <a href="{{ route('matakuliah.index') }}">Mata Kuliah</a>
</nav>

<br>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Keterangan</th>
            <th>Posisi</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($matakuliah as $mk)
            <tr>
                {{-- Properti $loop pertama: iteration --}}
                <td>{{ $loop->iteration }}</td>

                <td>{{ $mk->kode }}</td>
                <td>{{ $mk->nama }}</td>
                <td>{{ $mk->sks }}</td>

                {{-- Percabangan SKS --}}
                <td>
                    @if ($mk->sks > 3)
                        <strong>SKS Besar</strong>
                    @else
                        SKS Normal
                    @endif
                </td>

                {{-- Properti $loop kedua dan ketiga --}}
                <td>
                    @if ($loop->first)
                        Data Pertama
                    @elseif ($loop->last)
                        Data Terakhir
                    @else
                        Data Tengah
                    @endif
                </td>

                <td>
                    <a href="{{ route('matakuliah.show', $mk->id) }}">
                        Detail
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7">Belum ada data mata kuliah.</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection