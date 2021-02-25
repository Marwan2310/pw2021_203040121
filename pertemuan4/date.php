<?php 
/*
Marwan Hakim
203040121
https://github.com/Marwan2310/pw2021_203040121
Pertemuan 4 - 25 Februari 2021
Mempelajari mengenai Function PHP
*/
?>

<?php
    // Date
    // Untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    // Time 
    // UNIX. Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 januari 1970
    // echo time(); 
    // echo date("l",time()-60*60*24*100);  
    
    // mktime
    // membuat sendiri detik
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan tanggal, tahun
    // echo date ("l", mktime(0,0,0,8,25,1985));

    // strtotime
    echo date ("l", strtotime("25 aug 1985"));

?>