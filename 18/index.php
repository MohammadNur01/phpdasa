<?php
session_start();

if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
// koneksi ke database
require 'functions.php';

// pagination
// konfigurasi
$jumlahDataPerHalaman = 3;
$jumlahData = count(query("SELECT * FROM gunung"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = ( isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;


$gunung = query("SELECT * FROM gunung LIMIT $awalData, $jumlahDataPerHalaman");

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

<a href="logout.php">logout</a>

    <h1>Daftar Gunung</h1>

    <a href="tambah.php">Tambah data gunung</a>
    <br></br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian .." autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>
    <br><br>

<!-- navigasi -->

<?php if($halamanAktif > 1) : ?>
    <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo</a>
<?php endif; ?>

<?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
    <?php if($i == $halamanAktif) : ?>
        <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
    <?php else : ?>
        <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
    <?php endif; ?>
<?php endfor; ?>

<?php if($halamanAktif < $jumlahHalaman) : ?>
    <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo</a>
<?php endif; ?>

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
