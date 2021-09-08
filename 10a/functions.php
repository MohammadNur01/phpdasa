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


function tambah($data) {
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $elevasi = htmlspecialchars($data["elevasi"]);
    $lokasi = htmlspecialchars($data["lokasi"]);
    $akomodasi = htmlspecialchars($data["akomodasi"]);
    $basecamp = htmlspecialchars($data["basecamp"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO gunung
                VALUES
                ('0', '$nama', '$elevasi', '$lokasi', '$akomodasi', '$basecamp', '$gambar')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM gunung WHERE id = $id");
    return mysqli_affected_rows($conn);
}


?>
