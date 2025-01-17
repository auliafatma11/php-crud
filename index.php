<title>Data Siswa</title>
<h2>Data Siswa</h2>
<p>
    <a class="tambah" href="tambah.php">Tambah</a>
</p>
<table>
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Aksi</th>
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
$no=1;
while($data = mysqli_fetch_assoc($hasil)){?>
        <tr>
            <td> <?=$no?> </td>
            <td> <?=$data['nama']?> </td>
            <td> <?=$data['kelas']?> </td>
            <td> <?=$data['jurusan']?> </td>
            <td>
                <a class="tombol edit" href="edit.php?id=<?=$data['id']?>">Edit</a>
                <a class="tombol hapus" href="hapus.php?id=<?=$data['id']?>">Hapus</a>
            </td>               
        </tr>
<?php
$no++;
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
    a{
        text-decoration:none;
        border-radius:3px
    }
    .tambah{
        background:blue;
        color:white;
        padding:7px;
        font-weight:bold;
    }
    .tombol{
        color:white;
        padding:3px;
        font-size:12px;
    }
    .edit{
        background:orange;
    }
    .hapus{
        background:red;
    }
</style>
</table>

