<?php 
/*
Nama    :Marwan Hakim
NRP     :203040121
Shift   :Jumat 13.00
Tugas   : Tugas 3 Praktikum Pemrograman Web
*/
?>

<?php 
$bola = [
            "Cristiano Ronaldo" => "Juventus", 
            "Lionel Messi" => "Barcelona",
            "Luca Modric" => "Real Madrid",
            "Mohammad Salah" => "Liverpool",
            "Neymar Jr" => "Paris Saint Germain",
            "Sadio Mane" => "Liverpool",
            "Zlatan Ibrahimovic" => "Ac Milan",
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3c</title>

    <style>


    .container {
        font-family:arial;
        border:1px solid black;
        padding :20px;
        margin-right:50%;


    }

    th, td {
        padding :3px;
        text-align:left;
    }
    
    
    </style>
   
</head>
<body>

<div class="container">

    <h4>Daftar pemain bola terkenal dan clubnya</h4>
    <table>

        <?php foreach( $bola as $pemain => $club) : ?>
        <tr>
        <td><b><?= "$pemain" ?></td>
        <td><?= "<b>:</b> $club" ?></td>
        </tr>
            

        <?php endforeach ?>

    </table>
</div>



    
</body>
</html>