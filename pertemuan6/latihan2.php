<?php 
$mahasiswa = [
    ["Nama"=>"Abdillatur Rohman",
     "NIS"=>"3111",
     "Jurusan"=>"Rekayasa Perangkat Lunak",
     "email"=>"adijpr25gmail.com",
     "gambar"=>"img/aku.png",
     "instagram"=>"den_lacher"
    ],

    ["Nama"=>"Rizal Ferdiyansyah",
     "NIS"=>"3444",
     "Jurusan"=>"Rekayasa Perangkat Lunak",
     "email"=>"Rizal@gmai.com",
     "gambar"=>"img/perdi.png",
     "instagram"=>"perdii"
    ],

    ["Nama"=>"Muhammad Hermawan Taufiq",
     "NIS"=>"3129",
     "Jurusan"=>"Rekayasa Perangkat Lunak",
     "email"=>"hermawantaufiq@gmai.com",
     "gambar"=>"img/herman.png",
     "instagram"=>"hermawantaufiq"
    ],

    ["Nama"=>"Arjun Bima Firmansyah",
     "NIS"=>"3098",
     "Jurusan"=>"Rekayasa Perangkat Lunak",
     "email"=>"bavarian@gmai.com",
     "gambar"=>"img/bima.png",
     "instagram"=>"bavarian"
    ],

    ["Nama"=>"Alvin Nur Faizin",
     "NIS"=>"4312",
     "Jurusan"=>"Rekayasa Perangkat Lunak",
     "email"=>"alpincupen@gmai.com",
     "gambar"=>"img/alpin.png",
     "instagram"=>"alpincupen"
    ],

    ["Nama"=>"Akhlis Nur Fuad",
     "NIS"=>"4567",
     "Jurusan"=>"IPS",
     "email"=>"taibliki@gmai.com",
     "gambar"=>"img/aklis.png",
     "instagram"=>"norfuad"
    ],

    ["Nama"=>"Rifqi Maulana",
     "NIS"=>"2345",
     "Jurusan"=>"IPS",
     "email"=>"lambekecil@gmai.com",
     "gambar"=>"img/lambe.png",
     "instagram"=>"rifqilambe"
    ],

    ["Nama"=>"Ade Yoga Saputra",
     "NIS"=>"0987",
     "Jurusan"=>"Multi Media",
     "email"=>"yogasaputra@gmai.com",
     "gambar"=>"img/yoga.png",
     "instagram"=>"yogasaputra"
    ],

    ["Nama"=>"Muhammad Iqbal Tamam",
     "NIS"=>"4315",
     "Jurusan"=>"Bisnis Daring dan Pemasaran",
     "email"=>"iqbaltamam@gmai.com",
     "gambar"=>"img/ibal.png",
     "instagram"=>"iqball"
    ],

    ["Nama"=>"Aulin Afrilian Dafa",
     "NIS"=>"6288",
     "Jurusan"=>"IPS",
     "email"=>"apriliandafa@gmai.com",
     "gambar"=>"img/dafa.png",
     "instagram"=>"aulindafa"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara membuat array asosiatif</title>
</head>
<body>
<?php  foreach ($mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="<?= $mhs["gambar"]; ?> " alt="mypreend">
        </li>
        <li>Nama:<?= $mhs["Nama"]; ?> </li>
        <li>NIS : <?= $mhs["NIS"]; ?> </li>
        <li>Jurusan: <?= $mhs["Jurusan"]; ?> </li>
        <li>Email: <?= $mhs["email"]; ?> </li>
    </ul>
<?php  endforeach; ?>
 
</body>
</html>


