<!-- Bagian dalam loop tabel -->
@foreach($matakuliahs as $mk)
<tr>
    <td>{{ $mk->kode_mk }}</td>
    <td>{{ $mk->nama_mk }}</td>
    <td>{{ $mk->sks }}</td>
    <td>{{ $mk->semester }}</td>
    <!-- Menampilkan nama dosen dari relasi User -->
    <td>{{ $mk->dosen->name ?? 'Belum ada dosen' }}</td> 
</tr>
@endforeach