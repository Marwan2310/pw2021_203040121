<?php 
/*
Nama    :Marwan Hakim
NRP     :203040121
Shift   :Jumat 13.00
Tugas   : Tugas 6 Praktikum Pemrograman Web
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
    $result = mysqli_query($conn, $sql);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
   return $rows; 



}


function Tambah($data)
{



    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
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


function ubah($data)
{

    $conn = koneksi();
    $id = htmlspecialchars($data['id']);
    $gambar = htmlspecialchars($data['gambar']);
    $merek = htmlspecialchars($data['merek']);
    $nama = htmlspecialchars($data['nama']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $harga = htmlspecialchars($data['harga']);
    $kategori = htmlspecialchars($data['kategori']);

    $query = " UPDATE gitar SET
                gambar = '$gambar',
                merek = '$merek',
                nama = '$nama'
                deskripsi = '$deskripsi'
                harga = '$harga',
                kategori = '$kategori',
                WHERE id = $id
            ";
          
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);





}


function cari($keyword) {
    $query = "SELECT * FROM gitar
            WHERE
            nama LIKE '%$keyword%' OR
            merek LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' OR
            kategori LIKE '%$keyword%'
    
    ";

    return query($query);
}


function registrasi($data) {
    
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    

    // cek konfirmasi password
    $result = mysqli_query($conn, "SELECT username FROM user WHERE  username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah digunakan');
             </script>";
             return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('','$username', 'password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}