<?php 
/*
Marwan Hakim
203040121
Shift Jumat 13.00
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tugas1</title>
    <style>
        .warna-genap {
            background-color : lightblue;
        }
        .warna-ganjil {
            background-color : salmon;
        }
    </style>
</head>
<body>
    
    <table border="1" cellpadding="20" cellspacing="5">
            <?php for( $i = 1; $i <= 6; $i++ ) : ?>
                <?php if( $i % 2 == 1 ) : ?>
                    <tr class="warna-genap"> 
                <?php elseif ( $i % 2 == 0 ) : ?>
                    <tr class="warna-ganjil">
                <?php endif; ?>
                    <?php for ( $j = 1; $j <= 3; $j++ ) : ?>
                        <td></td>
                    <?php if( $i % 2 == 0) : ?>
                        <td class="warna-genap">
                    <?php elseif ( $i % 2 == 1) : ?>
                        <td class="warna-ganjil">
                    <?php endif; ?> 
            <?php endfor; ?>
                </tr>
            <?php endfor; ?>       
        </table>

</body>
</html>


</body>
</html>