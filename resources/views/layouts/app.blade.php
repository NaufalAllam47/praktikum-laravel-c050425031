<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('judul', 'Aplikasi Akademik')</title>
</head>
<body>
    <header>
        <h2>Sistem Informasi Akademik</h2>
        <nav>
            <a href="{{ route('mahasiswa.index') }}">Mahasiswa</a> |
            <a href="{{ route('matakuliah.index') }}">Mata Kuliah</a>
        </nav>
        <hr>
    </header>

    <main>
        <nav>
            <a href="{{ route('artikel.index') }}">Artikel</a>
            @auth
                <span>Halo, {{ auth()->user()->name }}</span>
                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Daftar</a>
             @endauth
        </nav>
        @if (session('pesan'))
        <div style="background:#d1fae5; padding:10px; margin-bottom:10px;">{{ session('pesan') }}</div>
        @endif
        @yield('konten')
    </main>
    <footer>
        <hr>
        <p>&copy; {{ date('Y') }} Praktikum Pemrograman Web</p>
    </footer>
</body>
</html>