<?php
require 'functions.php';



// cek apakah tombol sumbit sudah ditekan atau belum
if ( isset($_POST["submit"])){
    

    // cek apakah data berhasil ditambahkan atau tidak
    if ( tambah($_POST) > 0 ) {
        echo " 
        <script> 
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    } else{
        echo " 
        <script> 
            alert('data gagal ditambahkan');
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
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Gunung</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
        <li>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama">
        </li>
        <li>
        <label for="elevasi">Elevasi : </label>
        <input type="text" name="elevasi" id="elevasi">
        </li>
        <li>
        <label for="lokasi">Lokasi : </label>
        <input type="text" name="lokasi" id="lokasi">
        </li>
        <li>
        <label for="akomodasi">Akomodasi : </label>
        <input type="text" name="akomodasi" id="akomodasi">
        </li>
        <li>
        <label for="basecamp">Basecamp : </label>
        <input type="text" name="basecamp" id="basecamp">
        </li>
        <li>
        <label for="gambar">Gambar : </label>
        <input type="file" name="gambar" id="gambar">
        </li>
        <li>
        <button type="submit" name="submit">Tambah Data</button>
        </li>
        </ul>
    </form>
</body>
</html>
