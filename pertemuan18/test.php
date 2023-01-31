<?php 

require 'functions.php';
session_start();
if ( !isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}

// pagination
// konfigurasi
$jumlahcard = 3;
$totalpren = count(query("SELECT * FROM mahasiswa"));
$jumlahhalaman = ceil($totalpren / $jumlahcard);
$halamanaktif = ( isset($_GET["page"])) ? $_GET["page"] : 1;
$awaldata = ( $jumlahcard * $halamanaktif) - $jumlahcard;
// var_dump($awaldata);

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awaldata,$jumlahcard");



// Jika tombol cari di pencet
if (isset($_POST["cari"])) {
    $mahasiswa = cari ($_POST["keyword"]);
}

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Glaass them</title>
    <link rel="stylesheet" href="css/dancok.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
  </head>
  <body>
    <div class="gedi">
      <div class="container">
          <form class="navbar" action="" method="POST">
            <input type="text" placeholder="Cari Data Mahasiswa" size="50" autofocus name="keyword" autocomplete="off" >
            <button class="cari" type="submit" name="cari">Search</button>
            <br>
            <a href="tambah.php" class="add">Tambah Data Mahasiswa</a>
            <a href="logout.php" class="logout">logout</a>
        </form>
        <h1>This Is Mypreen Bolo</h1>
        <div class="row">
          <?php $i=1; ?>
        <?php foreach( $mahasiswa as $row ) : ?>
          <!-- <div class="col-lg-4"> -->
        <div class="card" data-tilt>
            <div class="onko"><?= $i; ?></div>
          <img src="img/<?= $row["gambar"] ; ?>" />
          <h2><?= $row["nama"] ; ?></h2>
          <p><?= $row["jurusan"] ; ?> | <?= $row["nis"] ; ?></p>
          <div class="link">
            <a href="https://www.instagram.com/den_lacher/?hl=id" target="_blank"><img src="img/facebook.png" /></a>
            <a href="https://bit.ly/lacherfb" target="_blank"><img src="img/telegram.png" /></a>
            <a href="https://bit.ly/Abdillatur" target="_blank"><img src="img/twitter.png" alt="" /></a>
            <br>
            <a href="ubah.php?id=<?= $row["id"] ; ?>">Ubah</a> |
            <a href="hapus.php?id=<?= $row["id"] ; ?>" onclick="return confirm('yakin mau di hapus deck?');">Hapus</a>
          </div>
          <a href="#" class="btn">Chat Sekarang</a>
          <br>
        </div>
        <?php $i++ ; ?>
        <?php endforeach; ?>
        </div>
        <br>
      <!-- </div> -->
    </div>
    <div class="pagination">
      <?php for($j=1; $j <= $jumlahhalaman; $j++): ?>
                   <a href="?page=<?= $j ; ?>"><?= $j; ?></a>

      <?php endfor; ?>
    </div>
    <script src="js/vanilla-tilt.js"></script>
  </body>
</html>
