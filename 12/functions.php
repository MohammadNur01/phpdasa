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

function ubah($data){
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $elevasi = htmlspecialchars($data["elevasi"]);
    $lokasi = htmlspecialchars($data["lokasi"]);
    $akomodasi = htmlspecialchars($data["akomodasi"]);
    $basecamp = htmlspecialchars($data["basecamp"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE gunung SET 
                nama = '$nama',
                elevasi = '$elevasi',
                lokasi = '$lokasi',
                akomodasi = '$akomodasi',
                basecamp = '$basecamp',
                gambar = '$gambar'
            WHERE id = $id
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query = "SELECT * FROM gunung WHERE
    nama LIKE '%$keyword%' OR
    elevasi LIKE '%$keyword%' OR
    lokasi LIKE '%$keyword%' OR
    akomodasi LIKE '%$keyword%' OR
    basecamp LIKE '%$keyword%'
    ";
    return query($query);
}

?>
