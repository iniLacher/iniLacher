<?php

require 'functions.php';

// Tangkap Data Dari URL
$id = $_GET["id"];
// query data mypreend berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];



// cek apakah tombol submit sudah pernah dipencet apa belum
if (isset($_POST['submit']) ) {
    

    // cek keberhasilan data
    if (ubah($_POST) > 0 ) {
        echo "<script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'index.php';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal Diubah!');
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
    <title>Ubah data Mahasiswa</title>
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
    <h1 class="text-center ">Ubah Data Ke MyPreend</h1>
    <form action="" method="POST" enctype="multipart/form-data"
    style="font-family:'Courier New', Courier, monospace ;
            font-weight: bold;">
        <input type="hidden" name="id"  value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="gambarlama"  value="<?= $mhs["gambar"]; ?>">
        <div class="mb-3">
            <label for="nama" class="form-label" >Nama :</label>
            <input type="text" class="form-control" name="nama" id="nama" autofocus required
            value="<?= $mhs["nama"] ; ?>">
        </div>
        <hr>
        <div class="mb-3">
            <label for="nis" class="form-label">No Induk Siswa(nis) :</label>
            <input type="text" class="form-control" name="nis" id="nis" required
            value="<?= $mhs["nis"] ; ?>">
        </div>
        <hr>
        <div class="mb-3">
            <label for="email" class="form-label">Email :</label>
            <input type="text" class="form-control" name="email" id="email" required
            value="<?= $mhs["email"] ; ?>">
        </div>
        <hr>
        <div class="col-md-5">
        <label for="jurusan" class="form-label">Pilih Jurusan</label>
        <select class="form-select" name="jurusan" id="jurusan"
        value="<?= $mhs["jurusan"] ; ?>">
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
            <label for="gambar" class="form-label">Gambar :</label><br>
            <img src="img/<?= $mhs["gambar"] ; ?>" alt="adi" width="100px"><br>
            <input type="file" class="form-control" name="gambar" id="gambar" required">
        </div>
        <hr>
        
        <button type="submit" class="btn btn-dark" name="submit">Ubah Data!!</button>
    </form>
</body>
</html>