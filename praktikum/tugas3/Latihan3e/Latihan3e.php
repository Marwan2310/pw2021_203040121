<?php 
/*
Nama    :Marwan Hakim
NRP     :203040121
Shift   :Jumat 13.00
Tugas   : Tugas 3 Praktikum Pemrograman Web
*/
?>

<?php 
    $alatmusik = [
    
    [


        "merek" => "Gibson",
        "nama"  => "Gibson Lespaul EPIPHONE",
        "deskripsi" => "Original guitar from gibson which is very legendary with Gibson Lespaul guitar",
        "harga"     => 8000000,
        "kategori"  => "Electric Guitar",
        "gambar"    => "gibson.jpg",



    ],


    
    [

        "merek" => "Fender ",
        "nama"  => "Fender Telecaster",
        "deskripsi" => "the atmosphere of jazz and ballads is even better with the Fender Telecaster",
        "harga"     =>9000000,
        "kategori"  =>"Electric Guitar",
        "gambar"    =>"fender.jpg",

    ],

    [


        "merek" => "Ibanez",
        "nama"  => "Ibanez RG 350L",
        "deskripsi" =>"the atmosphere of rock and metal music is better with the performance of ibanez",
        "harga"     =>6000000,
        "kategori"  => "Electic Guitar",
        "gambar"    => "ibanez.jpg",

    ],

    [



        "merek" => "Yamaha",
        "nama"  => "Yamaha PAC112j",
        "deskripsi" => "all kinds of music are better suited to Yamaha",
        "harga"     =>7000000,
        "kategori"  => "Electric Guitar",
        "gambar"    =>"pac.jpg",

    ],

    [


        "merek" => "Cort",
        "nama"  => "Cort SFX Dao Nat",
        "deskripsi" => "provides a distinctive sound for all types of music",
        "harga"     =>6000000,
        "kategori"  =>"Electric Guitar",
        "gambar"    =>"Cort.jpg",
    ],

    [


        "merek" => "Lakewood",
        "nama"  => "Lakewood",
        "deskripsi" => "the soft sound of the afternoon suits Lakewood",
        "harga"     =>4000000,
        "kategori"  =>"Acoustic Guitar",
        "gambar"    =>"wod.jpg",

    ],

    [



        "merek" => "Taylor",
        "nama"  => "Taylor 214CE Grand Auditoriun",
        "deskripsi" =>"give a different look like a superstar with Taylor",
        "harga"     =>5000000,
        "kategori"  =>"Acoustic Guitar",
        "gambar"    =>"Taylor.jpg",


    ],

    [


        "merek" => "Cervini",
        "nama"  => "Cremona HV-200",
        "deskripsi" =>"suara melodi yang indah dengan Cremona HV-200",
        "harga"     =>3000000,
        "kategori"  =>"Violin",
        "gambar"    =>"biola.jpg",


    ],

    [


        "merek" => "Yamaha",
        "nama"  => "Yamaha YAS 62",
        "deskripsi" =>"which can give a new atmosphere with Yamaha YAS",
        "harga"     =>3000000,
        "kategori"  =>"Sexophone",
        "gambar"    =>"yas.jpg",

    ],

    [



        "merek" => "Yamaha",
        "nama"  => "Yamaha Arius",
        "deskripsi" =>"memberikan suara yang indah dengan tuts ",
        "harga"     =>6000000,
        "kategori"  =>"Piano Acoustic", 
        "gambar"    =>"arius.jpg",

    ]


    ];


    function rupiah($angka){
        return "Rp " . number_format($angka,2,',','.');
     
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

      <title>Latihan3e</title>

    </head>

    <body>

    <div class="responsive-table">
            <table >
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
                 <?php foreach($alatmusik as $barang => $jual) :  ?>

                        <tr>
                    
                            <td><?php echo $i ?></td>
                            <td align="center"><?php echo "<img src='img/$jual[gambar]' width='100' height='100' />";?></td>
                            <td><?php echo $jual["merek"]; ?></td>
                            <td><?php echo $jual["nama"]; ?></td>
                            <td><?php echo $jual["deskripsi"]; ?></td>
                            <td><?php echo rupiah($jual["harga"]) ?></td>
                            <td><?php echo $jual["kategori"]; ?></td>
                            
                        
                        </tr>
                <?php $i++; ?>       
                <?php endforeach;  ?>

                </tbody>


            </table>

      </div>


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      
    </body>
  </html>