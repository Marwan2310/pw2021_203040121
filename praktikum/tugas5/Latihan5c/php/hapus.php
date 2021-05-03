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

// jika tidak ada id 
$id = $_GET['id'];

if (hapus($id) > 0) {
	echo "<script>
		alert('Data berhasil dihapus!');
		document.location.href = 'admin.php';
	</script>";
} else {
	echo "<script>
	alert('Data Gagal dihapus!');
	document.location.href = 'admin.php';

	</script>";
}

?>