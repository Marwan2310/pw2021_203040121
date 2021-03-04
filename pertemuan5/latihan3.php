<?php 
/*
Marwan Hakim
203040121
https://github.com/Marwan2310/pw2021_203040121
Pertemuan 5 - 4 Maret 2021
Mempelajari mengenai Array menggunakan looping dan membuat array multi dimensi
*/
?>

<?php
$mahasiswa = [
    ["Marwan Hakim", "203040121", " Teknik Informatika",
                "marwan@123"],
    ["Lulu", "203021121", " Teknik Informatika",
                "ll@123"],
    ["lupanama", "202040121", " Teknik Informatika",
                "hmm@123"]
            ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1> Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs) : ?>
<ul>
   <li>Nama : <?= $mhs[0]; ?></li>
   <li>NRP :<?= $mhs[1]; ?></li>
   <li>Jurusan :<?= $mhs[2]; ?></li>
   <li>Email :<?= $mhs[3]; ?></li>


</ul>
<?php endforeach; ?>


</body>
</html>