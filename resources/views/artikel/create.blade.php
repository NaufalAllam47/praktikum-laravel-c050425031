@extends('layouts.app')
@section('konten')
<form action="{{ route('artikel.store') }}" method="POST">
 @csrf
 <input type="text" name="judul" placeholder="Judul Artikel"><br>
 <textarea name="isi" placeholder="Isi Artikel"></textarea><br>
 <select name="status">
 <option value="draft">Draft</option>
 <option value="terbit">Terbit</option>
 </select><br>
 <button type="submit">Simpan</button>
</form>
@if ($errors->any())
<div style="background:#fee2e2; padding:10px;">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<input type="text" name="judul" value="{{ old('judul') }}">
@error('judul')
<small style="color:red;">{{ $message }}</small>
@enderror
@endsection
