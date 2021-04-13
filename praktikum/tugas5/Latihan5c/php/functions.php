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
    mysqli_select_db( $conn, "pw_tubes_203040121");
    

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


function Tambah($data)
{



    $conn = koneksi();

    
    $merek = htmlspecialchars($data['merek']);
    $nama = htmlspecialchars($data['nama']);
    $deskripsi = htmlspecialchars($data['deksripsi']);
    $harga = htmlspecialchars($data['harga']);
    $kategori = htmlspecialchars($data['kategori']);

$query = "INSERT INTO gitar
            VALUES
        ('', '$gambar','$merek','$nama','$deskripsi','$harga','$kategori')";


mysqli_query($conn, $query);
return mysqli_affected_rows($conn);


}


function hapus ($id) 
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM gitar WHERE id = $id");

    return mysqli_affected_rows($conn);
}





