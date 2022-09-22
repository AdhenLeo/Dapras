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
    <link rel="stylesheet" href="databarang.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <style>
        <?php
            include 'databarang.css'
        ?>
    </style>
</head>
<body>
    <div class="menu">
    <img src="logo.jpg" alt="">
        <h4>Dhen Sarpras</h4>
        <div class="menu2">
            <div class="isimenu">
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
                echo "<a>     </a>";
                echo "<button><a href='hapusbarang.php?idbar=".$bar['kode_barang']."'>Hapus</a></button>";
                echo "</td>";
            }
            ?>
    </table>
</body>
</html>