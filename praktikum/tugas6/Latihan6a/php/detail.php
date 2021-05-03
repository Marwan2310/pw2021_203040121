<?php 
/*
Nama    :Marwan Hakim
NRP     :203040121
Shift   :Jumat 13.00
Tugas   : Tugas 6 Praktikum Pemrograman Web
*/
?>

<?php 
// mengecek apakah ada id yang dikirimkan 
// jika tidak maka akan dikembalikan ke halaman index.php

if (!isset($_GET['id'])) {
    header("Location:index.php");
    exit;
}

require 'functions.php';

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
     <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href=" ../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Latihan6a</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
<div class="row">
    <div class="col s12 m7">
      <div class="card">
        <div class="card-image">
        <td><?="<img src='../assets/img/$gtr[gambar]' width='40'/>";?></td>
          <span class="card-title">List</span>
        </div>
        <div class="card-content">
            <p><?= $gtr["merek"];  ?></p>
            <p><?= $gtr["nama"];   ?></p>
            <p><?= $gtr["deskripsi"]; ?></p>
            <p><?= $gtr["harga"]; ?></p>
            <p><?= $gtr["kategori"]; ?></p>
        </div>
        <div class="card-action">
        <button class="tombol-kembali"><a href="index.php">Kembali</a></button>
        </div>
      </div>
    </div>
  </div>


<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>

