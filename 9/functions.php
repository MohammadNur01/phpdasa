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

?>
