<?php 
// menampilkan array
// menggunakan pengulangan
$angka = [3,52,2,53,63,75,32,2,57,33];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pegnulangan array</title>
    <style>
        .kotak{
                width: 50px;
                height : 50px;
                background-color: blue;
                text-align: center;
                line-height: 50px;
                margin : 3px;
                float: left;
            }
        .clear { clear: both}
    </style>

</head>
<body>

<?php for( $i = 0; $i < count($angka); $i++){ ?>
    <div class="kotak"><?php echo $angka[$i];?></div>
<?php } ?>

<div class="clear"></div>
    
<?php foreach($angka as $a){ ?>
    <div class="kotak"><?php echo $a; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach($angka as $a): ?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>
</body>
</html>