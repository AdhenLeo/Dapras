<?php
include 'koneksi.php';



if(isset($_POST['simpan'])){
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $stock = $_POST['stock'];

    $sql = "INSERT INTO data_barang(kode_barang, nama_barang, jenis_barang, stock) VALUES('$kode_barang','$nama_barang','$jenis_barang','$stock')";
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: databarang.php');
    }else{
        header('Location: simpanbarang.php?status=gagal');
    }
}
?>