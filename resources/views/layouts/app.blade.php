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
        @yield('konten')
    </main>
    <footer>
        <hr>
        <p>&copy; {{ date('Y') }} Praktikum Pemrograman Web</p>
    </footer>
</body>
</html>