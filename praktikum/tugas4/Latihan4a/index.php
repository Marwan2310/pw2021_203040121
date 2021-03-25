<?php 
/*
Nama    :Marwan Hakim
NRP     :203040121
Shift   :Jumat 13.00
Tugas   : Tugas 4 Praktikum Pemrograman Web
*/
?>


<?php 
// menghubungkan koneksi ke database
$conn = mysqli_connect("localhost", "root", "");

//  memilih database
mysqli_select_db($conn, "pw_tubes_203040121");

// melalukan database
$result = mysqli_query($conn, "SELECT * FROM gitar");


function rupiah($angka){
    return "Rp " . number_format($angka);
 
}


?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link rel="stylesheet" href="style.css">

      <title>Latihan4a</title>

    </head>

    <body>

    <div class="card-panel" >
            <table class="highlight">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>FOTO</th>
                    <th>MEREK</th>
                    <th>NAMA</th>
                    <th>DESKRIPSI</th>
                    <th>HARGA</th>
                    <th>KATEGORI</th>
                    
                </tr>
                </thead>

                <tbody>

                 <?php $i = 1 ; ?>
                 <?php while($row = mysqli_fetch_assoc($result)) :  ?>

                        <tr>
                    
                            <td><?php echo $i ?></td>
                            <td><?php echo "<img src='assets/img/$row[gambar]' width='70' height='90' />";?></td>
                            <td><?php echo $row["merek"]; ?></td>
                            <td><?php echo $row["nama"]; ?></td>
                            <td><?php echo $row["deskripsi"]; ?></td>
                            <td><?php echo rupiah($row["harga"]) ?></td>
                            <td><?php echo $row["kategori"]; ?></td>
                            
                        
                        </tr>
                <?php $i++; ?>       
                <?php endwhile;  ?>

                </tbody>


            </table>

      </div>


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      
    </body>
  </html>