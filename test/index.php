<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
// Jika tombol cari di pencet
if (isset($_POST["cari"])) {
    $mahasiswa = cari ($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin test</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <style>
        body{
            background-image: url(img/gmb2.png);
        }
    </style>
</head>
<body class=" m-5">

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>NIS</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jurusan</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach( $mahasiswa as $row ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
			<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
		</td>
		<td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
		<td><?= $row["nis"]; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["email"]; ?></td>
		<td><?= $row["jurusan"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
	
</table>
<div class="row row-cols-4 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="../pertemuan16/img/<?= $row["gambar"]; ?>" width="50px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?= $row["nama"]; ?></h5>
        <p class="card-text"><?= $row["nis"]; ?></p>
      </div>
    </div>
  </div>

</body>
</html>