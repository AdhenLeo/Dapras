<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="tampilsiswa.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <style>
        <?php
            include 'tampilsiswa.css'
        ?>
    </style>
</head>
<body>
    <div class="menu">
            <img src="logo.jpg" alt="">
            <h4>Dhen Sarpras</h4>
        <div class="menu2">
            <div class="isimenu">
                <button>Data Siswa</button> <br>
                <button><a href="databarang.php">Data Barang</a></button>
            </div>
        </div>
    </div>
    <h3>Data Siswa</h3>
    <h4><a href="datasiswa.html"><button>Tambah Data</button></a></h4>
    <table border="3">
        <tr>
            <th>Id Siswa</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Action</th>
        </tr>
        <?php
            $sql = "SELECT * FROM data_siswa";
            $query = mysqli_query($connect, $sql);
            while($sis = mysqli_fetch_array($query)){
                echo" <tr>";
                echo "<td>".$sis [0]."</td>";
                echo "<td>".$sis [1]."</td>";
                echo "<td>".$sis [2]."</td>";
                echo "<td>".$sis [3]."</td>";
                echo "<td>";
                echo "<button><a href='formedit.php?id=".$sis['id_siswa']."'>Edit</a></button>";
                echo "<a>        </a>";
                echo "<button><a href='hapus.php?id=".$sis['id_siswa']."'>Hapus</a></button>";
                echo "</td>";
            }
        ?>
    </table>
</body>
</html>