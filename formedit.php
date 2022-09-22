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
    <link rel="stylesheet" href="formedit.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <style>
        <?php
            include 'formedit.css'
        ?>
       
        *{
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>
<body>
    <div class="menu">
    <img src="logo.jpg" alt="">
        <h4>Nama Aplikasi</h4>
        <div class="menu2">
            <div class="isimenu">
            <button><a href="tampilsiswa.php">Data Siswa</a></button> <br>
            <button><a href="databarang.php">Data Barang</a></button>
            </div>
        </div>
    </div>
    <h3>Edit Data Siswa</h3>
    <form action="edit.php" method="post">
        <p><label>Id Siswa : <input value = "<?php echo $sis [0]?>" name="id_siswa"></label></p>
        <p><label>Nama Siswa : <input value = "<?php echo $sis [1]?>" name="nama_siswa"></label></p>
        <p><label>Kelas :  <input value = "<?php echo $sis [2]?>" name="kelas"></label></p>
        <p><label>Jurusan : <input value = "<?php echo $sis [3]?>" name="jurusan"></label></p>
        <button><a href="tampilsiswa.php">Kembali</a></button>
        <button type="submit" name="simpan" value="simpan">Simpan</button>
    </form>
</body>
</html>