
    <!-- // pengulangan
    // for
    // while
    // do..while
    // foreach :pengulangan khusus array

    // for( $i = 0; $i < 5; $i++ ) {
    //         echo"  Abdillatur Ganteng<br>";
    //     }
    // $i = 0;
    // while( $i < 5 ) {
    //     echo "Abdillatur Gantengbet ";
    //     $i++;
    // } -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warnakolom {
            background-color: silver;
        }
    </style>
</head>
<body>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for( $i = 1; $i <= 5; $i++ ) : ?>
            <?php if( $i % 2 == 0 ) : ?>
                <tr class="warnakolom">
                    <?php else : ?>
                    <tr>
            <?php endif; ?>
                <?php for( $j =1; $j <=5; $j++ ) : ?>
                    <td><?php echo"$i, $j"; ?></td>
                <?php endfor ;?>
            </tr>
        <?php endfor; ?>
        </table>

</body>
</html>