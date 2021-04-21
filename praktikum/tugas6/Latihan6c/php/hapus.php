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

require 'functions.php';

$id = $_GET["id"];

if( hapus($id) > 0) {
    echo "<script>
    alert('Barang Berhasil dihapus!');
    document.location.href = 'admin.php';
</script>";
} else {

    echo "<script>
    alert('Barang Berhasil dihapus!');
    document.location.href = 'admin.php';
</script>";   
}



?>
