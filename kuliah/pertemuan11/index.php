<?php 
/*
Marwan Hakim
203040121
https://github.com/Marwan2310/pw2021_203040121
Pertemuan 11
*/
?>

<?php 

require 'functions.php';


// $row = mysqli_fecth_row($result); array numerik
// $row = mysqli_fecth_assoc($result); array associative
// $row = mysqli_fecth_array($result); array keduanya
// tampung ke variabel mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa");

// ketika tombol cari dikembalikan
if(isset($_POST['cari'])) {
    $mahasiswa = cari($_POST['keyword']);
}

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

    <h3>Daftar Mahasiswa</h3>
        <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="POST">
        <input type="text" name="keyword" size="40" placeholder="Masukan keyword pencarian" autocomplete="off" autofocus>
        <button type="submit" name="cari">Cari</button> 
    </form>

    

    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>#</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>


    <?php if (empty($mahasiswa)) : ?>
      <tr>
        <td colspan="4">
          <p style="color: red; font-style: italic;">data mahasiswa tidak ditemukan!</p>
        </td>
      </tr>
    <?php endif; ?>

    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
        <td><?= $m['nama']; ?></td>
        <td>
          <a href="detail.php?id=<?= $m['id']; ?>">lihat detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>


</body>
</html>