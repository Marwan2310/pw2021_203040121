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
   <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <title>Latihan6a</title>
</head>
<body>
  <div class="container">
    <table class="striped">
      <?php foreach ($gitar as $gtr) : ?>
        <p class="nama">
          <a href="php/detail.php?id=<?= $gtr['id'] ?>">
              <?= $gtr["nama"] ?>

          </a>
        </p>
    <?php endforeach;  ?>
  </div>  



  <div class="login">
    
      <a  href="php/login.php" class="waves-effect waves-light btn-large"><i class="material-icons left">cloud</i>Admin</a>
      
      </table>
  </div>


  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>