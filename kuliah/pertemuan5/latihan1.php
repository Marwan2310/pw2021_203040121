<?php 
/*
Marwan Hakim
203040121
https://github.com/Marwan2310/pw2021_203040121
Pertemuan 5 - 4 Maret 2021
Mempelajari mengenai ARRAY
*/
?>

<?php
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda 
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0



// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];


// Menampilkan Array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan 1 elemen pada array 
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];


// menambahkan elemen baru pada array

var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);












?>