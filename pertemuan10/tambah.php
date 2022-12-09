<?php
require'functions.php' ;
// cek apakah tombol submit sudah pernah dipencet apa belum
if (isset($_POST['tambah']) ) {
    var_dump($_POST);

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
</head>
<body>
    <form action="" method="POST" style="font-family:'Courier New', Courier, monospace ;">
        <ul>
            <li>
                <label for="nis">NIS:</label>
                <input type="text" name="nis" id="nis">
            </li>
            <br>
            <li>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama">
            </li>
            <br>
            <li>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email">
            </li>
            <br>
            <li>
                <label for="jurusan">Jurusan:</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <br>
            <li>
                <label for="gambar">Gambar      :</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <br>
            <li>
                <button type="submit" name="tambah">Tambah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>