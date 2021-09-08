<?php
require '../functions.php';

$keyword =$_GET["keyword"];

$query = "SELECT * FROM gunung 
            WHERE
        nama LIKE '%$keyword%' OR
        elevasi LIKE '%$keyword%' OR
        lokasi LIKE '%$keyword%' OR
        akomodasi LIKE '%$keyword%' OR
        basecamp LIKE '%$keyword%'
        ";
$gunung = query($query);

?>

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

