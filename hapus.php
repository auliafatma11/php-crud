<?php
include "config.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM siswa WHERE id = '$id'";
    $hasil = mysqli_query($koneksi, $query);
if(mysqli_affected_rows($koneksi)>0){
    echo "Berhasil mengapus data";
    echo "<meta http-equiv='refresh' content='1, url=index.php'>";
}else{
    echo "Gagal menghapus data";
    echo "<meta http-equiv='refresh' content='1, url=index.php'>";
}
}
?>

<fieldset style="width:20%">
    <legend>Hapus Siswa</legend>
    <form action="" method="get">
        <input type="number" name="id" id="id" required>
        <input type="submit" value="Hapus">
    </form>
</fieldset>