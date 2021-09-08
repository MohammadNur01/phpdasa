<?php

// $mahasiswa = [
//     ["sandika", " 2219429", "TI", "asasas@gmail.com"],["sgalih", " 22194352", "TI", "asasas@gmail.com"]
// ];
$mahasiswa = [
    [
    "nama" => "Sandika ",
    "nrp" => "72939502",
    "email" => "adakda@gmail.vom",
    "jurusan" => "TI",
    "gambar" => "1.jpg"
    ],
    [
    "nama" => "Dodi ",
    "nrp" => "7293943",
    "email" => "adakda@gmail.vom",
    "jurusan" => "TI",
    "gambar" => "2.jpg"
    ]
];

// echo $mahasiswa[1]["tugas"][1];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>
        <img src="img/<?= $mhs["gambar"] ?>" >
        </li>
        <li>Nama : <?= $mhs ["nama"]; ?></li>
        <li>NRP : <?= $mhs ["nrp"]; ?></li>
        <li>Jurusan : <?= $mhs ["email"]; ?></li>
        <li>Email : <?= $mhs ["jurusan"]; ?></li>
        
    </ul>
    <?php endforeach; ?>
</body>
</html>