<?php 
/*
Marwan Hakim
203040121
https://github.com/Marwan2310/pw2021_203040121
Pertemuan 13
*/
?>
<?php 
session_start();

if (isset($_SESSION['login'])) {
    header("Location: index.php");
}

require 'functions.php';

// keitika tombol lofin ditekan 
if (isset($_POST['login'])) {
    $login = login($_POST);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h3>Form Login</h3>
    <?php if(isset($login['error'])) : ?>
        <p style="color: red; font-style: italic;"><?= $login['pesan']; ?></p>
    <?php endif; ?>
    <form action="" method="POST">
    <ul>
        <li>
            <label>
                Username
                <input type="text" name="username" autofouc autocomplete="off" required>
            </label>
        
        </li>

        <li>
            <label>
                Password
                <input type="password" name="password">
            </label>
        
        </li>

        <li>
            <button type="submit" name="login">Login</button>
        
        </li>

        <li>
        
        <button><a href="registrasi.php">Tambah User Baru</a></button>

        </li>


    
    </ul>
    

    </form>
    
</body>
</html>