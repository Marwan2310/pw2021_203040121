<?php 
/*
Nama    :Marwan Hakim
NRP     :203040121
Shift   :Jumat 13.00
Tugas   : Tugas 5 Praktikum Pemrograman Web
*/
?>
<?php 
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$gitar = query("SELECT * FROM gitar");

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
        gambar {
            color:aqua;
        }
    </style>
    <title>Latihan5a</title>
    
</head>
<body>
    <div class="container">
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
        <?php $i = 1;  ?>
        <?php foreach ($gitar as $gtr) : ?>
        <tr>
            <td><?= $i;  ?></td>
            <td>
                <a href=""><button>Ubah</button></a>
                <a href=""><button>Hapus</button></a>
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
        
        </table>
    </div>
</body>
</html>