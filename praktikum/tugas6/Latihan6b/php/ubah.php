<?php 
/*
Nama    :Marwan Hakim
NRP     :203040121
Shift   :Jumat 13.00
Tugas   : Tugas 6 Praktikum Pemrograman Web
*/
?>
<?php 
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query

$gtr = query("SELECT * FROM gitar WHERE id = $id")[0];



if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0){
        echo "<script>
                    alert('Barang Berhasil diubah');
                    document.location.href = 'admin.php';
             </script>";
    } else {
        echo "<script>
                alert('Barang Gagal diubah!');
                document.location.href = 'admin.php';
        </script>";   
    }
}


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
    <h3>Form Ubah Data Barang</h3>
    <input type="hidden" name="id" value="<?= $gtr["id"]?>">
    <form action="" method="post">
        <ul>
        <li>
            <label for="gambar">Gambar :</label><br>
            <input type="text" name="gambar" id="gambar" required value="<?= $gtr ["gambar"]; ?>"><br><br>
        </li>
        
        <li>
            <label for="merek">Merek :</label><br>
            <input type="text" name="merek" id="merek" required value="<?= $gtr ["merek"]; ?>"><br><br>
        </li>
        <li>
            <label for="nama">Nama :</label><br>
            <input type="text" name="nama" id="nama" required  value="<?= $gtr ["nama"]; ?>" ><br><br>
        </li>
        <li>
            <label for="deskripsi">Deskripsi :</label><br>
            <input type="text" name="deskripsi" id="deskripsi" required  value="<?= $gtr ["deskripsi"]; ?>"><br><br>
        </li>
        <li>
            <label for="harga">Harga :</label><br>
            <input type="text" name="harga" id="harga" required  value="<?= $gtr ["harga"]; ?>"><br><br>
        </li>
        <li>
        <label for="kategori">Kategori :</label><br>
            <input type="text" name="kategori" id="kategori" required  value="<?= $gtr ["kategori"]; ?>"><br><br>
        </li>
        <br>
        <button type="submit" name="submit"> Ubah Barang!</button>
        <button type="submit">
            <a href="admin.php" style="text-decoration: none; color; black;">Kembali</a>
        </button>






        </ul>




    </form>
</body>
</html>