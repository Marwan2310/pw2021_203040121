<?php 
/*
Nama    :Marwan Hakim
NRP     :203040121
Shift   :Jumat 13.00
Tugas   : Tugas 2 Praktikum Pemrograman Web
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2c</title>
    <style>
        .bola { 
            background-color: salmon;
            height: 30px;
            width: 30px;
            line-height: 25px;
            text-align: center;
            margin-bottom: 3px;
            border-radius: 25px;
            display: inline-block;
            border: 1px solid black;
            border-radius: 30px;
        
            margin: 1px;
        
        }

        .div {
            border:2px solid black ;
            padding:5px;
        }



    </style>

</head>
<body>


<div>
    <?php 
        function tumpukanBola($tumpukan) {
            for( $i= 1; $i <= $tumpukan; $i++ ) {
                echo "<br>";
                    for($j=1; $j <= $i; $j++ ) {
                        echo "<div class ='bola'> $i  </div>";




                    }
            }

        }

        echo tumpukanBola(5);
    ?>

</div>

</body>
</html>