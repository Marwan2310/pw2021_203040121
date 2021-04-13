<?php 
/*
Nama    :Marwan Hakim
NRP     :203040121
Shift   :Jumat 13.00
Tugas   : Tugas 5 Praktikum Pemrograman Web
*/
?>

<?php 
// mengecek apakah ada id yang dikirimkan 
// jika tidak maka akan dikembalikan ke halaman index.php

if (!isset($_GET['id'])) {
    header("Location: ../index.php");
    exit;
}

require 'php/functions.php';

// mengambil id dari url 
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$gtr = query("SELECT * FROM gitar WHERE id = $id ")[0];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan5a</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="foto">
            <img src="assets/img/<?= $gtr["gambar"] ?>"alt="" width="100">
        </div>
        <div class="keterangan">
            <p><?= $gtr["merek"];  ?></p>
            <p><?= $gtr["nama"];   ?></p>
            <p><?= $gtr["deskripsi"]; ?></p>
            <p><?= $gtr["harga"]; ?></p>
            <p><?= $gtr["kategori"]; ?></p>
            
        </div>
        <button class="tombol-kembali"><a href="index.php">Kembali</a></button>
    </div>
</body>
</html>