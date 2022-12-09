<?php

require 'functions.php';
// cek apakah tombol submit sudah pernah dipencet apa belum
if (isset($_POST['tambah']) ) {
    var_dump($_POST);
    var_dump($_FILES); die;
    

    // cek keberhasilan data
    if (tambah($_POST) > 0 ) {
        echo "<script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'index.php';
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <style>
        body{
            background-image: url(img/gmb4.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        hr{
            background-color: white;
        }
    </style>
    
</head>
<body class=" container col-4 ms-3 mt-5 mb-5 text-light ">
    <h1 class="text-center ">Tambahkan Data Ke MyPreend</h1>
    <form action="" method="POST" enctype="multipart/form-data"
    style="font-family:'Courier New', Courier, monospace ;
            font-weight: bold;">
        <div class="mb-3">
            <label for="nama" class="form-label" >Nama :</label>
            <input type="text" class="form-control" name="nama" id="nama" autofocus required
            placeholder="Masukkan Nama">
        </div>
        <hr>
        <div class="mb-3">
            <label for="nis" class="form-label">No Induk Siswa(nis) :</label>
            <input type="text" class="form-control" name="nis" id="nis" required
            placeholder="Masukkan NIS">
        </div>
        <hr>
        <div class="mb-3">
            <label for="email" class="form-label">Email :</label>
            <input type="text" class="form-control" name="email" id="email" required
            placeholder="Masukkan Email">
        </div>
        <hr>
        <div class="col-md-5">
        <label for="jurusan" class="form-label">Pilih Jurusan</label>
        <select class="form-select" name="jurusan" id="jurusan">
        <option>Rekayasa Perangkat Lunak</option>
        <option>Teknik Sepeda Motor</option>
        <option>Akutansi Keuangan Lembaga</option>
        <option>Perkantoran</option>
        <option>Bisnis Daring Dan Pemasaran</option>
        <option>IPS</option>
        <option>Multi Media</option>
        </select>
        </div>
        <hr>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar :</label>
            <input type="file" class="form-control" name="gambar" id="gambar" required
            placeholder="Masukkan File Gambar">
        </div>
        <hr>
        
        <button type="submit" class="btn btn-dark" name="tambah">Tambah Data!!</button>
    </form>
</body>
</html>