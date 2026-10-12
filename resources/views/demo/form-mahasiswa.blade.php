<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ url('/demo/mahasiswa') }}" method="POST">
        @csrf

        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ old('nama') }}" required>
        <br><br>

        <label>Program Studi:</label><br>
        <input type="text" name="prodi" value="{{ old('prodi') }}" required>
        <br><br>

        <label>Semester:</label><br>
        <input type="number" name="semester" min="1"
               value="{{ old('semester') }}" required>
        <br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
