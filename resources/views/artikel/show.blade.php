@extends('layouts.app')
@section('konten')
<h1>{{ $artikel->judul }}</h1>
<small>Oleh {{ $artikel->penulis->name }} | Status: {{ $artikel->status }}</small>
<p>{{ $artikel->isi }}</p>
<a href="{{ route('artikel.index') }}">← Kembali</a>
@endsection