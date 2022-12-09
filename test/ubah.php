<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah data mahasiswa</title>
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
		
        form {
            font-family: 'Courier New', Courier, monospace;
            font-weight: bold;
        }
    </style>
</head>
<body class=" container col-4 ms-3 mt-5 mb-5 text-light ">
	<h1 class="text-center">Ubah data mahasiswa</h1>

	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
		<ul>
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
            <label for="gambar" class="form-label">Gambar :</label>
            <input type="text" class="form-control" name="gambar" id="gambar" required
            value="<?= $mhs["gambar"] ; ?>">
        </div>
        <hr>
        
        <button type="submit" class="btn btn-dark" name="submit">Ubah Data!!</button>
			</li>
		</ul>

	</form>




</body>
</html>