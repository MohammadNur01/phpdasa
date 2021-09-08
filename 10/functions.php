<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "mmmmmma8", "phpdasar");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $gns = [];
    while($gn = mysqli_fetch_assoc($result)){
        $gns[] = $gn;
    }
    return $gns;
}

function tambah($data){
    global $conn;
    $nama = $data["nama"];
    $elevasi = $data["elevasi"];
    $lokasi = $data["lokasi"];
    $akomodasi = $data["akomodasi"];
    $basecamp = $data["basecamp"];
    $gambar = $data["gambar"];

    $query = "INSERT INTO gunung
                VALUES
            ('0', '$nama', '$elevasi', '$lokasi', '$akomodasi', '$basecamp', '$gambar')
            ";
    mysqli_query($conn, $query);

    return mysql_affected_rows($conn);
}

?>
