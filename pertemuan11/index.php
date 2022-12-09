<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin 11</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <style>
        body{
            background-image: url(img/gmb2.png);
        }
    </style>
</head>
<body class=" m-5">
    <h1>Daftar MYPreeeend</h1>   
    <a href="test.php">Tambah Data Mahasiswa</a> 
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>no.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i=1; ?>
    <?php foreach( $mahasiswa as $row ) : ?>
    <tr class="px-4 text-body">
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"] ; ?>">Ubah</a> |
            <a href="hapus.php?id=<?= $row["id"] ; ?>" onclick="retrun confirm('Yakin Mau di Hapus deck?');">Hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"] ; ?>" alt="adi" width="70px"></td>
        <td><?= $row["nis"] ; ?></td>
        <td><?= $row["nama"] ; ?></td>
        <td><?= $row["email"] ; ?></td>
        <td><?= $row["jurusan"] ; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>


    </table>

</body>
</html>