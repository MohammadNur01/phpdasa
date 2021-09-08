<?php
// koneksi ke database
require 'functions.php';
$gunung = query("SELECT * FROM gunung");

// tombol cari ditekan
if ( isset($_POST["cari"])){
    $gunung = cari($_POST["keyword"]);
}
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

    <a href="tambah.php">Tambah data mahasiswa</a>
    <br></br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian .." autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>
    <br></br>

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
                <a href="ubah.php?id=<?= $gn["id"]; ?>">ubah</a> |
                <a href="hapus.php?id=<?= $gn["id"]; ?>" onclick="return confirm('yakin?');" >hapus</a>
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
