<?php 
/*
Nama    :Marwan Hakim
NRP     :203040121
Shift   :Jumat 13.00
Tugas   : Tugas 6 Praktikum Pemrograman Web
*/
?>

<?php 
// menghububgkan dengan file php lainnya

require 'php/functions.php';

// melakukan query
$gitar = query("SELECT * FROM gitar")


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan6b</title>
</head>
<body>
  <div class="container">
      <?php foreach ($gitar as $gtr) : ?>
        <p class="nama">
          <a href="php/detail.php?id=<?= $gtr['id'] ?>">
              <?= $gtr["nama"] ?>

          </a>
        </p>
    <?php endforeach;  ?>
  </div>  
  <div class="login">
    <a href="php/login.php">
      <button type="">Masuk ke halaman admin</button>
      </a>
</body>
</html>