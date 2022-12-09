<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak{
            width: 30px;
            height: 30px;
            background-color: #bada55;
            line-height: 30px;
            text-align: center;
            float: left;
            margin: 3px;
            transition: 1s;

        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php 
$angka =[
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
?>


<?php foreach( $angka as $ank ) : ?>
    <?php foreach( $ank as $a ) : ?>
    <div class="kotak"><?php echo $a ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach ; ?>

</body>
</html>