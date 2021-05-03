<?php 
// koneksi ke database
$conn = mysqli_connect("localhost","root", "","pw_203040121");

// ambil data dari tabel 
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");


// ambil data (fectch) dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keduanya
// mysqli_fetch_object() // mengembalikan

// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pertemuan9</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>
<table border="1" cellspacing="0" cellpadding="10">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>NRP</th>
        <th>Email</th>
        <th>Jurusan</th>
        
    
    </tr>


    <?php $i = 1 ;?>
    <?php while ($row = mysqli_fetch_assoc($result)):?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a>
            <a href="">hapus</a>
        </td>

        <td><img src="img/<?= $row["gambar"]; ?>" width="85"></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
        


    </tr>
    <?php $i ++;?>
    <?php endwhile; ?>



</table>


    
</body>
</html>