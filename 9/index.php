<?php
// koneksi ke database
require 'functions.php';
$gunung = query("SELECT * FROM gunung");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Gunung</title>
</head>
<body>
    <h1>Daftar Gunung</h1>
    <p>Lorem ipsum dolor sitdssd amet consectexdddtur, adipisicing elit. Debitis, dolor.</p>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Elevasi</th>
            <th>Lokasi</th>
            <th>Akomodasi</th>
            <th>Basecamp</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach( $gunung as $gn) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td><img src="img2/<?= $gn["gambar"]; ?>"width="70" height="50" ></td>
            <td><?= $gn["nama"]; ?>"</td>
            <td><?= $gn["elevasi"]; ?>"</td>
            <td><?= $gn["lokasi"]; ?>"</td>
            <td><?= $gn["akomodasi"]; ?>"</td>
            <td><?= $gn["basecamp"]; ?>"</td>
        </tr>
        <?php $i++ ; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>
