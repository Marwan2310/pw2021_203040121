<?php 
/*
Marwan Hakim
203040121
https://github.com/Marwan2310/pw2021_203040121
Pertemuan 7 - 9 Maret 2021
Mempelajari mengenai GET & POST
*/
?>

<?php 
// // Variable Scope / lingkup variabel
// $x = 10;
// function tampilx(){
//     global $x;
//     echo $x;
// }

// tampilx();
 
?>

<?php 
// SUPERGLOBALS
// variable global mikil PHP
// merupakan Array Assocaitive
// echo $_SERVER ["SERVER_NAME"];
?>

<?php
// $_GET
$mahasiswa = [
    [
            "nama" => "Marwan Hakim", 
            "nrp" => "203040121",
            "email" => "marwan@123",
            "jurusan" => "Teknik Informatika",
            "gambar" => "Marwan.jpg"
    ],
    [
            "nama" => "L", 
            "nrp" => "203040999",
            "email" => "L@123",
            "jurusan" => "Teknik Informatika",
            "gambar" => "gitar.jpg"
    ]
];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach ( $mahasiswa as $mhs ) : ?> 
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"];?>"><?= $mhs["nama"]; ?></a>
    </li>

<?php endforeach; ?>


</ul>









</body>
</html>

