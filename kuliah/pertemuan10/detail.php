<?php 
/*
Marwan Hakim
203040121
https://github.com/Marwan2310/pw2021_203040121
Pertemuan 10
*/
?>


<?php 
require 'functions.php';

// ambil  id  dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id 
$m = query("SELECT * FROM mahasiswa WHERE id = $id");  



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>

   
<h3>Detail Mahasiswa</h3>
    <ul>
    <li><img src="img/<?= $m['gambar']; ?>" width="90" ></li>
    <li>NRP : <?= $m['nrp']; ?></li>
    <li>Nama : <?= $m['nama']; ?></li>
    <li>Email : <?= $m['email']; ?></li>
    <li>Jurusan :<?= $m['jurusan']; ?></li>
    <li><a href="">ubah | <a href="">hapus</a></li>
    <li><a href="latihan3.php">Kembali ke daftar mahasiswa</a></li>
    </ul>    
    </ul>    
</body>
</html>