<?php
if(isset($_GET['id'])){
include "config.php";
$id = $_GET['id'];
$query = "SELECT * FROM siswa WHERE id='$id'";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_assoc($hasil);
?>

<title>Edit Siswa</title>
<form action="edit-proses.php" method="post">
    <fieldset style="width:30%">
        <legend>Edit Siswa</legend>
        <input type="text" name="id" id="id" value="<?=$data['id']?>" hidden>
        <p>Nama</p>
        <input type="text" name="nama" id="nama" value="<?=$data['nama']?>">

        <p>Kelas</p>
        <select name="kelas" id="kelas" required>
            <option value=""> - Pilih Kelas - </option>
            <option value="12" <?PHP if($data['kelas']=="10") echo "selected" ?> >10</option>
            <option value="11" <?PHP if($data['kelas']=="11") echo "selected" ?> >11</option>
            <option value="12" <?PHP if($data['kelas']=="12") echo "selected" ?> >12</option>
        </select>

        <p>Jurusan</p>

        <?php
        if($data['jurusan']=="PPLG"){
            $pplg = "checked";
            $akl = "";
        }else{
            $pplg= "";
            $akl = "checked";
        }

        ?>
        <input type="radio" name="jurusan" id="jurusan" value="PPLG" <?=$pplg?> > PPLG
        <input type="radio" name="jurusan" id="jurusan" value="AKL" <?=$akl?> > AKL

        <p>
            <input type="reset" value="Reset">
            <input type="submit" value="Simpan">
        </p>
    </fieldset>
</form>

<?php
}else{
    header("location:index.php");
}
?>