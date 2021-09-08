<?php
session_start();

if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
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
    <style>
        .loader {
            width : 20px;
            position: absolute;
            margin-left: 10px;
            display: none;
        }

        @media print{
            .logout {
                display: none;
            }

        }
    </style>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>

<a href="logout.php"class="logout">Logout</a> | <a href="cetak.php" target="_blank">Cetak</a>

    <h1>Daftar Gunung</h1>

    <a href="tambah.php">Tambah data gunung</a>
    
    <br></br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian .." autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari!</button>
        <img src="img2/loader.gif" class="loader">
    </form>

    <br></br>

    <div id="container">

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
    </div>

</body>
</html>
