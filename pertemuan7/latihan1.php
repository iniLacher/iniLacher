<?php 
//$_GET
$mypren = [
    ["nama"=>"Abdillatur Rohman",
     "nis"=>"3111",
     "jurusan"=>"Rekayasa Perangkat Lunak",
     "email"=>"adijpr25gmail.com",
     "gambar"=>"img/aku.png",
     "instagram"=>"den_lacher"
    ],

    ["nama"=>"Ade Yoga Saputra",
     "nis"=>"0987",
     "jurusan"=>"Multi Media",
     "email"=>"yogasaputra@gmai.com",
     "gambar"=>"img/yoga.png",
     "instagram"=>"yogasaputra"
    ],

    ["nama"=>"Akhlis Nur Fuad",
     "nis"=>"4567",
     "jurusan"=>"IPS",
     "email"=>"taibliki@gmai.com",
     "gambar"=>"img/aklis.png",
     "instagram"=>"norfuad"
    ],

    ["nama"=>"Alvin Nur Faizin",
     "nis"=>"4312",
     "jurusan"=>"Rekayasa Perangkat Lunak",
     "email"=>"alpincupen@gmai.com",
     "gambar"=>"img/alpin.png",
     "instagram"=>"alpincupen"
    ],

    ["nama"=>"Arjun Bima Firmansyah",
     "nis"=>"3098",
     "jurusan"=>"Rekayasa Perangkat Lunak",
     "email"=>"bavarian@gmai.com",
     "gambar"=>"img/bima.png",
     "instagram"=>"bavarian"
    ],

    ["nama"=>"Aulin Afrilian Dafa",
     "nis"=>"6288",
     "jurusan"=>"IPS",
     "email"=>"apriliandafa@gmai.com",
     "gambar"=>"img/dafa.png",
     "instagram"=>"aulindafa"
    ],

    ["nama"=>"Muhammad Hermawan Taufiq",
     "nis"=>"3129",
     "jurusan"=>"Rekayasa Perangkat Lunak",
     "email"=>"hermawantaufiq@gmai.com",
     "gambar"=>"img/herman.png",
     "instagram"=>"hermawantaufiq"
    ],

    ["nama"=>"Muhammad Iqbal Tamam",
     "nis"=>"4315",
     "jurusan"=>"Bisnis Daring dan Pemasaran",
     "email"=>"iqbaltamam@gmai.com",
     "gambar"=>"img/ibal.png",
     "instagram"=>"iqball"
    ],

    ["nama"=>"Rifqi Maulana",
     "nis"=>"2345",
     "jurusan"=>"IPS",
     "email"=>"lambekecil@gmai.com",
     "gambar"=>"img/lambe.png",
     "instagram"=>"rifqilambe"
    ],

    ["nama"=>"Rizal Ferdiyansyah",
     "nis"=>"3444",
     "jurusan"=>"Rekayasa Perangkat Lunak",
     "email"=>"Rizal@gmai.com",
     "gambar"=>"img/perdi.png",
     "instagram"=>"perdii"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
    <style>
        h1{
            font-family: monospace;
            text-align: center;
            font-size: 50px;
            background-color: bisque;
            color: cadetblue;
        }
        body{
            border: 10px solid silver;
            background-color: #eaeaea;
            margin: 0px;
        }
    </style>
</head>
<body>
<h1>My Preeend</h1>    
<ul>
    <?php foreach( $mypren as $pren) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $pren["nama"] ; ?>&nis=<?= $pren["nis"] ; ?>&jurusan=<?= $pren["jurusan"] ; ?>&instagram=<?= $pren["instagram"] ; ?>&email=<?= $pren["email"] ; ?>&gambar=<?= $pren["gambar"] ; ?>"><?= $pren["nama"] ; ?></a>
        </li>
    <?php endforeach; ?>
</ul>
<br><br><br><br><br><br><br><br>
</body>
</html>