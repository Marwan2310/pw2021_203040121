<?php 
/*
Nama    :Marwan Hakim
NRP     :203040121
Shift   :Jumat 13.00
Tugas   : Tugas 5 Praktikum Pemrograman Web
*/
?>
<?php 
require 'functions.php';

if (isset($_POST["tambah"])) {
    if (tambah($_POST) > 0){
        echo "<script>
                    alert('Barang Berhasil ditambahkan!');
                    document.location.href = 'admin.php';
             </script>";
    } else {
        echo "<script>
                alert('Barang Gagal ditambahkan!');
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
    <title>Latihan 5c</title>
</head>
<body>
    <h3>Form Tambah Data Barang</h3>
    <form action="" method="post">
        <ul>
        
        <li>
            <label for="merek">Merek :</label><br>
            <input type="text" name="merek" id="merek" required><br><br>
        </li>
        <li>
            <label for="nama">Nama :</label><br>
            <input type="text" name="nama" id="nama" required><br><br>
        </li>
        <li>
            <label for="deskripsi">Deskripsi :</label><br>
            <input type="text" name="deskripsi" id="deskripsi" required><br><br>
        </li>
        <li>
            <label for="harga">Harga :</label><br>
            <input type="text" name="harga" id="harga" required><br><br>
        </li>
        <li>
            <label for="kategori">Kategori :</label><br>
            <select name="kategori" id="kategori">
            <option value="">---------- Pilih Kategori ----------</option>
            <option value="Electric">Electric</option>
            <option value="Acoustic">Acoustic</option>
            </select>
        </li>
        <br>
        <button type="submit" name="tambah"> Tambah Barang!</button>
        <button type="submit">
            <a href="../index.php" style="text-decoration: none; color; black;">Kembali</a>
        </button>






        </ul>




    </form>
</body>
</html>