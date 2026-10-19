@extends('layouts.app')
@section('konten')
<form action="{{ route('artikel.update', $artikel->id) }}" method="POST">
 @csrf
 @method('PUT')
 <input type="text" name="judul" value="{{ $artikel->judul }}"><br>
 <textarea name="isi">{{ $artikel->isi }}</textarea><br>
 <button type="submit">Perbarui</button>
</form>

@endsection
