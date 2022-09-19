<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>
<body>
    <div>
        <h4>Nama Aplikasi</h4>
        <div>
            <div>
                <button><a href="tampilsiswa.php">Data Siswa</a></button> <br>
                <button>Data Barang</button>
            </div>
        </div>
    </div>
    <h3>Data Barang</h3>
    <h4><a href="databarang.html"><button>Tambah Data</button></a></h4>
    <table border="3">
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Jenis Barang</th>
            <th>Stock</th>
            <th>Action</th>
        </tr>
        <?php
            $sql = "SELECT * FROM data_barang";
            $query = mysqli_query($connect, $sql);
            while($bar = mysqli_fetch_array($query)){
                echo" <tr>";
                echo "<td>".$bar[0]."</td>";
                echo "<td>".$bar['nama_barang']."</td>";
                echo "<td>".$bar['jenis_barang']."</td>";
                echo "<td>".$bar['stock']."</td>";
                echo "<td>";
                echo "<button><a href='formeditbarang.php?idbar=".$bar['kode_barang']."'>Edit</a></button>";
                echo "<button><a href='hapusbarang.php?idbar=".$bar['kode_barang']."'>Hapus</a></button>";
                echo "</td>";
            }
            ?>
    </table>
</body>
</html>