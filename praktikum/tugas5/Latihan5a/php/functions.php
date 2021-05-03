<?php 
/*
Nama    :Marwan Hakim
NRP     :203040121
Shift   :Jumat 13.00
Tugas   : Tugas 5 Praktikum Pemrograman Web
*/
?>
<?php 
// fungsi untuk memlakukan koneksi ke database

function koneksi() 
{
    $conn = mysqli_connect("localhost", "root", "" );
    mysqli_select_db($conn, "pw_tubes_203040121");
    

    return $conn;


}

// function untuk mealukan query dan memasukannya kedalam array

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
   return $rows; 



}



?>