@extends('layouts.app')
@section('konten')
<h1>Registrasi</h1>

@if ($errors->any())
    <div style="background:#fee2e2; padding:10px;">
        <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    </div>
@endif

<form action="{{ route('register') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nama" value="{{ old('name') }}"><br>
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
    <input type="password" name="password" placeholder="Password (min. 8 karakter)"><br>
    <input type="password" name="password_confirmation" placeholder="Ulangi Password"><br>
    <button type="submit">Daftar</button>
</form>
<p>Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
@endsection