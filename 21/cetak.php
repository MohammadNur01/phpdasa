<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';
$gunung = query("SELECT * FROM gunung");

try{
    $mpdf = new \Mpdf\Mpdf();

    $mpdf->debug = true;
    $html = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Daftar gunung</title>
        </head>
        <body>
            <h1>Daftar Gunung</h1>
            <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Elevasi</th>
                    <th>Lokasi</th>
                    <th>Akomodasi</th>
                    <th>Basecamp</th>
                </tr>';

        $i = 1;       
        foreach( $gunung as $gn) {
                $html .= '<tr>
                    <td>'. $i++ .'</td>
                    <td><img src="img2/'. $gn["gambar"] .'" width="50" </td>
                    <td>'. $gn["nama"] .'</td>
                    <td>'. $gn["elevasi"] .'</td>
                    <td>'. $gn["lokasi"] .'</td>
                    <td>'. $gn["akomodasi"] .'</td>
                    <td>'. $gn["basecamp"] .'</td>
                </tr>';
        };

        $html .= '</table>
        </body>
        </html';

        $mpdf->WriteHTML($html);
        $mpdf->output('result.pdf');
} catch (\Mpdf\MpdfException $e) { // Note: safer fully qualified exception 
    //       name used for catch
// Process the exception, log, print etc.
echo $e->getMessage();
}
?>
