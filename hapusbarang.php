<?php
include 'koneksi.php';

if (isset($_GET['idbar'])){
    header('Location: databarang.php');
}

$kode_barang = $_GET['idbar'];
$sql = "DELETE FROM data_barang WHERE kode_barang='$kode_barang'";
$query = mysqli_query($connect, $sql);

if ($query){
    header('Location: databarang.php');
}else{
    header('Location: hapusbarang.php?status=gagal');
}
?>