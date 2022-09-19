<?php
include 'koneksi.php';

if (isset($_GET['id'])){
    header('Location: tampilsiswa.php');
}

$id_siswa = $_GET['id'];
$sql = "DELETE FROM data_siswa WHERE id_siswa='$id_siswa'";
$query = mysqli_query($connect, $sql);

if ($query){
    header('Location: tampilsiswa.php');
}else{
    header('Location: hapus.php?status=gagal');
}
?>