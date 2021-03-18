<?php 
/*
Nama    :Marwan Hakim
NRP     :203040121
Shift   :Jumat 13.00
Tugas   : Tugas 3 Praktikum Pemrograman Web
*/
?>

<?php 
$player = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3b</title>
    <style>
        .container1 {

        border: 1px solid black;
        padding-right: 20px;
        margin-right: 50px;
        font-family: arial;
        
        
        }
    
    </style>
</head>
<body>

<div class="container1">
        <h4>Daftar pemain bola terkenal</h4>
        <?php 
            echo "<ol>
                <li>$player[0]</li>
                <li>$player[1]</li>
                <li>$player[2]</li>
                <li>$player[3]</li>
                <li>$player[4]</li>
            
            
            </ol>";

        ?>

        <h4>Daftar pemain bola terkenal baru</h4>

        <?php 

            $player[5] ="Luca Modric";
            $player[6] ="Sadio Mane";

            echo "<ol>
                <li>$player[1]</li>
                <li>$player[2]</li>
                <li>$player[5]</li>
                <li>$player[0]</li>
                <li>$player[4]</li>
                <li>$player[6]</li>
                <li>$player[3]</li>
            
            
            </ol>";

        ?>
        








</div>



</body>
</html>