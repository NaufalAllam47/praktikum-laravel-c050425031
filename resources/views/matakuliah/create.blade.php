<form action="/matakuliah" method="POST">
    @csrf <!-- Wajib ada di setiap form Laravel -->
    
    <label for="kode_mk">Kode MK:</label>
    <input type="text" name="kode_mk" required><br>

    <label for="nama_mk">Nama MK:</label>
    <input type="text" name="nama_mk" required><br>

    <label for="sks">SKS:</label>
    <input type="number" name="sks" required><br>

    <label for="semester">Semester:</label>
    <input type="number" name="semester" required><br>

    <label for="dosen_id">Dosen Pengampu:</label>
    <select name="dosen_id" required>
        <option value="">-- Pilih Dosen --</option>
        @foreach($dosens as $dosen)
            <option value="{{ $dosen->id }}">{{ $dosen->name }}</option>
        @endforeach
    </select><br><br>

    <button type="submit">Simpan Data</button>
</form>