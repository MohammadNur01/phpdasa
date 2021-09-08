<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "mmmmmma8", "phpdasar");

// ambil data dari tabel mahasiswa / query data gunung 

$result = mysqli_query($conn, "SELECT *FROM gunung");

// ambil data (fetch) gunung dari object result
// mysqli_fecth_row() // mengembalikan array numerik
// mysqli_fecth_assoc() mengembalikan array asosiative
// mysqli_fecth_array() mengembalikan keduanya
// mysqli_fetch_object()

// while($gn = mysqli_fetch_assoc($result)){
// var_dump($gn);

// }
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
    <p>Lorem ipsum dolor sit amet consectfgjhkjhlkjlkjetur, adiicifdfng elit. Debitis, dolor.</p>

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

        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td>1</td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td><img src="img2/<?= $row["gambar"]; ?>"width="70" height="50" ></td>
            <td><?= $row["nama"]; ?>"</td>
            <td><?= $row["elevasi"]; ?>"</td>
            <td><?= $row["lokasi"]; ?>"</td>
            <td><?= $row["akomodasi"]; ?>"</td>
            <td><?= $row["basecamp"]; ?>"</td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
