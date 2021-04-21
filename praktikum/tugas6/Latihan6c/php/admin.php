<?php 
/*
Nama    :Marwan Hakim
NRP     :203040121
Shift   :Jumat 13.00
Tugas   : Tugas 6 Praktikum Pemrograman Web
*/
?>
<?php 
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
    
}


// menghubungkan dengan file php lainnya
require 'functions.php';


// melakukan query
$gitar = query("SELECT * FROM gitar");


if (isset($_POST["cari"])) {
    $gitar = cari($_POST["keyword"]);
}



function rupiah($angka){
    return "Rp " . number_format($angka);
 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesheet.css">
    <style>
        body {
            background-color: aqua;

       
        }
       
    </style>
    <title>Latihan6c</title>
    
</head>
<body>
  
  <form action="" method="post"> 

        <input type="text" name="keyword" autofocus 
        placeholder="cari...." autocomplete="off">
        <button type="submit" name="cari">Cari</button>
  
  
  </form>     

     


      
        <button><a href="tambah.php">Tambah Data</a></button>

        
        <table border="1" cellspacing="13" cellpadding="0">
        <tr>
        <th>NO</th>

        <th>Opsi</th>
        <th>Gambar</th>
        <th>Merek</th>
        <th>Nama</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>Kategori</th>    
        </tr>

     <?php if (empty($gitar)) : ?>

        <tr>
             <td colspan="7">
                    <h1>Data tidak ditemukan</h1>
            </td>

        </tr>

     <?php else : ?>

        <?php $i = 1;  ?>
        <?php foreach ($gitar as $gtr) : ?>
        <tr>
            <td><?= $i;  ?></td>
            <td>
                <a href="ubah.php?id=<?= $gtr["id"];?>"><button>Ubah</button></a>
                <a href="hapus.php?id=<?= $gtr["id"];?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
            </td>
            <td><?="<img src='../assets/img/$gtr[gambar]' width='70' height='90' />";?></td>
            <td><?=  $gtr["merek"]; ?></td>
            <td><?=  $gtr["nama"]; ?></td>
            <td><?=  $gtr["deskripsi"]; ?></td>
            <td><?=  rupiah($gtr["harga"]); ?></td>
            <td><?=  $gtr["kategori"]; ?></td>
        
        </tr>
        <?php $i++;  ?>
        <?php endforeach;  ?>
    <?php endif; ?>
        
        </table>
   
</body>
</html>