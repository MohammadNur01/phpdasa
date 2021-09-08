<?php 
// array
//
//membuat array
// cara lama 
$hari = array("Senin", "Selasa", "Rabu");
// cara baru 
$bulan = ["Januari","Februari", "Maret"];


// menampilkan array => var_dump, print_r

// var_dump($hari);
// echo "<br>";
// print_r ($bulan);
// echo "<br>";

// // menampilkan 1 elemen pada array
// echo $hari[1];
// echo "<br>";
// echo $bulan[2];

// menambahkan 1 elemen pada array
var_dump($hari);
$hari[] = "Kamis";
echo "<br>";
var_dump($hari);
?>
