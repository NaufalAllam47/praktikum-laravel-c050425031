
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistik Mahasiswa</title>
</head>
<body>
    <h1>Statistik Mahasiswa</h1>

    <h3>Total Mahasiswa: {{ $total }}</h3>

    <h2>Jumlah Mahasiswa per Program Studi</h2>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Program Studi</th>
                <th>Jumlah Mahasiswa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($perProdi as $index => $prodi)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $prodi->prodi }}</td>
                    <td>{{ $prodi->jumlah }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
