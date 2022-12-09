<?php 
if( !isset($_GET["nama"]) ||
    !isset($_GET["nis"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["instagram"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["gambar"])
    
){
    // redirect
    header("location: latihan1.php");
    exit;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mypreend</title>
    <style>
        h1{
            font-family: monospace;

        }
        a{
            width: 200px;
            font-size: 20px;
            border: 2px solid lightskyblue;
            color: red;
            background-color: gold;
            display: inline-block;
        }
        li{
            width: auto;    
        }
    </style>
</head>
<body>
    <h1>This is my preend</h1>
    <ul>
        <li><img src="<?= $_GET["gambar"] ; ?>" alt="MyPreend"></li>
        <li>Nama : <?= $_GET["nama"] ; ?></li>
        <li>NIS : <?= $_GET["nis"] ; ?></li>
        <li>Jurusan : <?= $_GET["jurusan"] ; ?></li>
        <li>Instagram : <?= $_GET["instagram"] ; ?></li>
        <li>Email : <?= $_GET["email"] ; ?></li>
    </ul>

    <a href="latihan1.php">Kembali ke My preend</a>

</body>
</html> 