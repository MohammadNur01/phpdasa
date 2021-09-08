<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];
// query data gunung berdasarkan id
$gns =  query("SELECT * FROM gunung WHERE id = $id")[0];




// cek apakah tombol sumbit sudah ditekan atau belum
if ( isset($_POST["submit"])){
    
    // cek apakah data berhasil diubah atau tidak
    if ( ubah($_POST) > 0 ) {
        echo " 
        <script> 
            alert('data berhasil diubah!');
            document.location.href = 'index.php';
        </script>
        ";
    } else{
        echo " 
        <script> 
            alert('data gagal diubah!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Gunung</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $gns["id"]; ?>">
        <ul>
        <li>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" required value="<?= $gns["nama"]; ?>">
        </li>
        <li>
        <label for="elevasi">Elevasi : </label>
        <input type="text" name="elevasi" id="elevasi"
        required value="<?= $gns["elevasi"]; ?>">
        </li>
        <li>
        <label for="lokasi">Lokasi : </label>
        <input type="text" name="lokasi" id="lokasi"
        required value="<?= $gns["lokasi"]; ?>">
        </li>
        <li>
        <label for="akomodasi">Akomodasi : </label>
        <input type="text" name="akomodasi" id="akomodasi" required value="<?= $gns["akomodasi"]; ?>">
        </li>
        <li>
        <label for="basecamp">Basecamp : </label>
        <input type="text" name="basecamp" id="basecamp" required value="<?= $gns["basecamp"]; ?>">
        </li>
        <li>
        <label for="gambar">Gambar : </label>
        <input type="text" name="gambar" id="gambar" required value="<?= $gns["gambar"]; ?>">
        </li>
        <li>
        <button type="submit" name="submit">Ubah Data</button>
        </li>
        </ul>
    </form>
</body>
</html>

