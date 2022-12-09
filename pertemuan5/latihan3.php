<?php 
// setiap string harus di kasih tanda kutip dan setiap kata harus di dalam tanda kutip
$mahasiswa = [
    ["Adi", "005010561", "Rekayasa Perngkat Lunak", "adijpr25@gmail.com"],
    ["Ferdi", "005023465", "Rekayasa Perngkat Lunak", "rizalferdiyansyah@gmail.com"],
    ["Bima", "009074347", "Rekayasa Perngkat Lunak", "arjunbimafirmansyah@gmail.com"],
];
// echo $mahasiswa=[0]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>

<h1>Data Mahasiswa</h1>


<?php foreach ( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>Nama    :<?= $mhs [0]; ?></li>
        <li>NISN    :<?= $mhs [1]; ?></li>
        <li>Jurusan :<?= $mhs [2]; ?></li>
        <li>Email   :<?= $mhs [3]; ?></li>
    </ul>
<?php endforeach; ?>

</body>
</html>