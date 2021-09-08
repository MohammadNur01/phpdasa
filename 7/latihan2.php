<?php 
// cek apakah tidak ada data di $_GET

if (!isset ($_GET["nama"]) || 
    !isset ($_GET["elevasi"]) || 
    !isset ($_GET["lokasi"]) || 
    !isset ($_GET["akomodasi"]) || 
    !isset ($_GET["basecamp"]) || 
    !isset ($_GET["gambar"])){
    //  redirect
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Gunung</title>
</head>
<body>
    <ul>
        <li><img src="img2/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["elevasi"]; ?></li>
        <li><?= $_GET["lokasi"]; ?></li>
        <li><?= $_GET["akomodasi"]; ?></li>
        <li><?= $_GET["basecamp"]; ?></li>
    </ul>

<a href="latihan1.php">Kembali ke daftar gunung</a>
</body>
</html>
