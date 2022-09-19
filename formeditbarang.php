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
</head>
<body>
    <div>
        <h4>Nama Barang</h4>
        <div>
            <div>
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
        <!-- <input type="submit" name="simpan" value="Simpan"> -->
        <button type="submit" name="simpan" value="Simpan">SIMPAN</button>
    </form>
</body>
</html>