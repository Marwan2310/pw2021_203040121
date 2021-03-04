<?php 
/*
Marwan Hakim
203040121
Shift Jumat 13.00
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1c</title>
    <style>
        .bulat { 
            background-color: salmon;
            height: 30px;
            width: 30px;
            line-height: 25px;
            text-align: center;
            margin-bottom: 3px;
            border-radius: 25px;
            display: inline-block;
            border: 2px solid black;
            font-weight: bold;
        }
        }
    </style>

</head>
<body>

<?php for( $i= 1; $i <= 3; $i++ ) : ?>
<?php for($j=1; $j <= $i; $j++ ) :?>
    <div class="bulat"><?= $i ?></div>
	<?php endfor; ?>
    <br>
<?php endfor; ?>
	




</body>
</html>