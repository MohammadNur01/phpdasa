<?php 
// date
 //   echo date("l, d-M-Y");

 //time
 // UNIX Timestamp / EPOCH time
 // detik yang telah berlalu sejak 1 Januari 1970
// echo date ("l", time()+60*60*24*100);

// mktime
// membuat waktu sendiri
// mktime(0,0,0,0,0,0) => jam, menit, detik, bulan, tanggal, tahun
// echo date ("l", mktime(0,0,0,7,16,1997));

// strtotime
echo date("l",strtotime("16 june 1997"));
?>
