<?php 
// pengulangan pada array
// for / foreach
$angka = [46,98,78,23,11,99];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2</title>
    <style>
        .kotak {
           width: 30px;
           height: 30px;
           background-color: salmon;
           text-align: center;
           float: left;
           line-height: 30px;
           margin: 3px;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<!-- jika menggunakan for -->
<?php for( $i = 0; $i < count($angka); $i++ ) { ?>
    <div class="kotak"><?php echo $angka [$i]; ?></div>
<?php } ?>

<div class="clear"></div>
<!-- jika menggunakan foreach -->
<?php foreach( $angka as $ank ) { ?>
    <div class="kotak"><?= $ank ?></div>
<?php } ?>


<div class="clear"></div>
<!-- menyimpelkan foreach -->
<?php foreach( $angka as $ank ) : ?>
    <div class="kotak"><?= $ank; ?></div>
<?php endforeach; ?>




</body>
</html>