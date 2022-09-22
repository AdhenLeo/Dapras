<?php
include 'koneksi.php';

$kode_barang = $_GET['idbar'];
$sql = "SELECT * FROM data_barang WHERE kode_barang='$kode_barang'";
$query = mysqli_query($connect, $sql);
$bar = mysqli_fetch_row($query);

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
    <link rel="stylesheet" href="formeditbarang.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>
<body>
    <div class="menu">
    <img src="logo.jpg" alt="">
        <h4>Nama Barang</h4>
        <div class="menu2">
            <div class="isimenu">
            <button><a href="tampilsiswa.php">Data Siswa</a></button> <br>
            <button><a href="databarang.php">Data Barang</a></button>
            </div>
        </div>
    </div>
    <h3>Edit Data Barang</h3>
    <form action="editbarang.php" method="post">
        <p><label>kode_barang : <input value = "<?php echo $bar[0]?>" name="kode_barang"></label></p>
        <p><label>nama_barang : <input value = "<?php echo $bar[1]?>" name="nama_barang"></label></p>
        <p><label>jenis_barang :  <input value = "<?php echo $bar[2]?>" name="jenis_barang"></label></p>
        <p><label>stock : <input value = "<?php echo $bar[3]?>" name="stock"></label></p>
        <button><a href="databarang.php">Kembali</a></button>
        <button type="submit" name="simpan" value="Simpan">Simpan</button>
    </form>
</body>
</html>