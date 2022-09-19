<?php
include 'koneksi.php';

$id_siswa = $_GET['id'];
$sql = "SELECT * FROM data_siswa WHERE id_siswa='$id_siswa'";
$query = mysqli_query($connect, $sql);
$sis = mysqli_fetch_row($query);

if(mysqli_num_rows($query) < 1 ){
    die ("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>
</head>
<body>
    <div>
        <h4>Nama Siswa</h4>
        <div>
            <div>
            <button><a href="tampilsiswa.php">Data Siswa</a></button> <br>
            <button><a href="databarang.php">Data Barang</a></button>
            </div>
        </div>
    </div>
    <h3>Edit Data Siswa</h3>
    <form action="edit.php" method="post">
        <p><label>id_siswa : <input value = "<?php echo $sis [0]?>" name="id_siswa"></label></p>
        <p><label>nama_siswa : <input value = "<?php echo $sis [1]?>" name="nama_siswa"></label></p>
        <p><label>kelas :  <input value = "<?php echo $sis [2]?>" name="kelas"></label></p>
        <p><label>jurusan : <input value = "<?php echo $sis [3]?>" name="jurusan"></label></p>
        <button type="submit" name="simpan" value="simpan">SIMPAN</button>
    </form>
</body>
</html>