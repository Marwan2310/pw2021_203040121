<?php 
/*
Marwan Hakim
203040121
https://github.com/Marwan2310/pw2021_203040121
Pertemuan 6 - 8 Maret 2021
Mempelajari mengenai Array Associative
*/
?>

<?php
// $mahasiswa = [
//     ["Marwan Hakim", "203040121", "marwan@123",
//               "Teknik Informatika"],
//      ["L", "203040021", "L@123",
//               "Teknik Informatika"]

//  ];

// Array Asssociative
// definisinya sama seperti array numerik, kecuali
// key nya adalah string yang kita buat sendiri
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

    <?php foreach( $mahasiswa as $mhs) : ?>

    <ul>

    <li>
        <img src="img/<?= $mhs ["gambar"]?>">
    </li>


        <li>Nama : <?=  $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    
    </ul>

    <?php endforeach; ?>

</body>
</html>

