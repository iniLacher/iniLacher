<?php

require 'functions.php';
session_start();
if ( !isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}
// cek apakah tombol submit sudah pernah dipencet apa belum
if (isset($_POST['tambah']) ) {
    

    // cek keberhasilan data
    if (tambah($_POST) > 0 ) {
        echo "<script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'test.php';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal Ditambahkan!');
                document.location.href = 'index.php';
            </script>";
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahsiswa</title>
    <link rel="stylesheet" href="css/tambah.css">
    
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="box">
        <div class="form">
        
        <h1>Tambahkan Data</h1>
        <div class="inputBox">
            <input type="text"name="nama" id="nama" autofocus required>
            <span>Nama :</span>
            <i></i>
        </div>
        <div class="inputBox">
            <input type="text"name="nis" id="nis" required>
            <span>Nomor induk siswa :</span>
            <i></i>
        </div>
        <div class="inputBox">
            <input type="text"name="email" id="email" required>
            <span>Email :</span>
            <i></i>
        </div>
        <div class="inputBox">
        <input type="text"name="jurusan" id="jurusan" required>
            <span>Jurusan :</span>
            <i></i>
        </div>
        <div class="inputBox">
            <input type="file"name="gambar" id="gambar" required>
            <span>Gambar :</span>
            <i></i>
        </div>
        <input type="submit"name="tambah" value="Tambah">
        </div>
        </div>
    </form>
</body>
</html>