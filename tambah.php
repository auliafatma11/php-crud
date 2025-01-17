<title>Tambah Siswa</title>
<form action="tambah-proses.php" method="post">
    <fieldset style="width:30%">
        <legend>Tambah Siswa</legend>

        <p>Nama</p>
        <input type="text" name="nama" id="nama" required>

        <p>Kelas</p>
        <select name="kelas" id="kelas" required>
            <option value="">- Pilih Kelas - </option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>

        <p>Jurusan</p>
        <input type="radio" name="jurusan" id="jurusan" value="PPLG" required> PPLG
        <input type="radio" name="jurusan" id="jurusan" value="AKL" required> AKL

        <p>
            <input type="reset" value="Reset">
            <input type="submit" value="Simpan">
        </p>
    </fieldset>
</form>