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

	if ( isset($_POST["register"])) {
		
		if (registrasi($_POST) > 0) {
			 echo "<script>
			 		alert('Registrasi Berhasil');
			 		document.location.href = 'login.php';
			 </script>";
		} else  {
			echo "<script>
					alert('Registrasi Gagal');
			</script>";
		}


	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Latihan 6b</title>
	<style>
		<style>
			form {
				table label {
					background-color: grey;
				}
			}

		</style>

	</style>
</head>
<body>

	<h1>Halaman Registrasi</h1>

	<form action="" method="post">

	<table>
		<tr>
			<td><label for="username">Username</label></td>
			<td>:</td>
			<td><input type="text" name="username" id="username"></td>

		</tr>
		<tr>
			<td><label for="password">Password</label></td>
			<td>:</td>
			<td><input type="password" name="password" id="password"></td>
		</tr>

	
		
		
	</table>
	<button type="submit" name="register">Register</button>
	</form>

	
</body>
</html>
