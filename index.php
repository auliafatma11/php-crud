<title>Data Siswa</title>
<h2>Data Siswa</h2>
<p>
    <a href="tambah.php">Tambah</a>
</p>
<table>
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
    </thead>
    
    <tbody>

<?php
// Memanggil file config
include "config.php";

// Menyiapkan query
$query = "SELECT * FROM siswa";

// Menyimpan hasil query
$hasil = mysqli_query($koneksi, $query);


// var_dump($data);
// echo $data['nama'];

while($data = mysqli_fetch_assoc($hasil)){?>
        <tr>
            <td> <?=$data['id']?> </td>
            <td> <?=$data['nama']?> </td>
            <td> <?=$data['kelas']?> </td>
            <td> <?=$data['jurusan']?> </td>               
        </tr>
<?php
}
?>      
    </tbody>

<style>
    table{
        border-collapse:collapse;
    }
    th,td{
        border:1px solid black;
        padding:5px;
    }
    th{
        background:#ccc;
    }
</style>
</table>

