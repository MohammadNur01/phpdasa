<?php 
// $_GET
$gunung = [
    [
        "nama" => "Slamet",
        "elevasi" => "3465 mdpl",
        "lokasi" => "Tegal, Purbalingga, Brebes, Pemalang, Banyumas Jawa Tengah ",
        "akomodasi" => "roda 2, roda 4",
        "basecamp" => "Bambangan, Gucci, Baturaden, Dhipajaya",
        "gambar" => "slamet.png"
    ],
    [
        "nama" => "Merapi",
        "elevasi" => "2930 mdpl",
        "lokasi" => "Sleman(DIY), Magelang(Jawa Tengah)",
        "akomodasi" => "roda 2, roda 4",
        "basecamp" => "Selo, Kaliurang, Sawangan",
        "gambar" => "merapi.png"
    ],
    [
        "nama" => "Merbabu", 
        "elevasi" => "3145 mdpl",
        "lokasi" => "Semarang, Boyolali, Magelang, Jawa Tengah",
        "akomodasi" => "roda 2, roda 4",
        "basecamp" => "Thekelan, Wekas, Chuntel, Selo, Suwanting",
        "gambar" => "merbabu.png"
    ],
    [
        "nama" => "Andong",
        "elevasi" => "1726 mdpl",
        "lokasi" => "Salatiga, Semarang, Magelang Jawa Tengah",
        "akomodasi" => "roda 2 dan roda 4",
        "basecamp" => "Sawit, Jaya Giri",
        "gambar" => "andong.png"  
    ],
    [
        "nama" => "Sindoro",
        "elevasi" => "3136 mdpl",
        "lokasi" => "Temanggung Jawa Tengah",
        "akomodasi" => "roda 2 dan roda 4",
        "basecamp" => "Kledung",
        "gambar" => "sindoro.png"  
    ],
    [
        "nama" => "Sumbing",
        "elevasi" => "3371 mdpl",
        "lokasi" => "Magelang, Temanggung, Wonosobo Jawa Teangah",
        "akomodasi" => "roda 2 dan roda 4",
        "basecamp" => "Garung, Bowongso, Kaliangkrik,Mangli, Lamuk, Cepit, Banaran",
        "gambar" => "sumbing.png"  
    ],
    [
        "nama" => "Lawu",
        "elevasi" => "3245 mdpl",
        "lokasi" => "Magetan(Jawa Timur), Karanganyar(Jawa Tengah)",
        "akomodasi" => "roda 2, roda 4 dan kendaraan besar",
        "basecamp" => "Cemoro Sewu, Cemoro Kandang, Tambak, Singolangu dan Candi cetho ",
        "gambar" => "lawu.png"  
    ],
    [
        "nama" => "Muria",
        "elevasi" => "1602 mdpl",
        "lokasi" => "Kudus, Pati dan Jepara Jawa Tengah",
        "akomodasi" => "roda 2 dan roda 4",
        "basecamp" => "Rahwatu, Gebog",
        "gambar" => "muria.png"  
    ],
    [
        "nama" => "Ungaran",
        "elevasi" => "2050 mdpl",
        "lokasi" => "Kab.Semarang Jawa Tengah",
        "akomodasi" => "roda 2 dan roda 4",
        "basecamp" => "Mawar, Gedongsongo dan Promasan",
        "gambar" => "ungaran.png"  
    ],
    [
        "nama" => "Semeru",
        "elevasi" => "3676 mdpl",
        "lokasi" => "Malang dan Lumajang Jawa Timur",
        "akomodasi" => "roda 2 dan roda 4",
        "basecamp" => "Ranu Pane",
        "gambar" => "semeru.png"  
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Gunung yang menarik untuk di daki</h1>
    <ul>
    <?php foreach( $gunung as $gn) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $gn["nama"]; ?>&elevasi=<?= $gn["elevasi"]; ?>&lokasi=<?= $gn["lokasi"]; ?>&akomodasi=<?= $gn["akomodasi"];?>&basecamp=<?= $gn["basecamp"];?>&gambar=<?= $gn["gambar"]; ?>"><?= $gn["nama"];?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>
