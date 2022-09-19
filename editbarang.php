<?php
include 'koneksi.php';

if (isset($_POST['simpan'])){
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $stock = $_POST['stock'];

    $sql = "UPDATE data_barang SET nama_barang='$nama_barang', jenis_barang='$jenis_barang', stock='$stock' WHERE kode_barang='$kode_barang'";
    $query = mysqli_query ($connect, $sql);
    
    if ($query) {
        header('Location: databarang.php');
    }else{
        header('Location: editbarang.php?status=gagal');
    }
}
?>