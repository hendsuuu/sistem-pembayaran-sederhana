<?php 
include 'koneksi.php' ;
// somewhere early in your project's loading, require the Composer autoloader
// see: http://getcomposer.org/doc/00-intro.md
require 'vendor/autoload.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "select * from tbl_siswa where id='$id'");
$d = mysqli_fetch_array($data)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        .right{
            width: 20%;
        }
        table{
            width: 100%;
        }
    </style>
</head>
<body>
    <Center><h1>Nota Pembayaran</h1></Center>
    <hr>
    <table>
        <tr>
            <td>Nama</td>
            <td class="right">: <?= $d['nama']; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td class="right">: <?= $d['alamat']; ?></td>
        </tr>
        <tr>
            <td>SPP</td>
            <td class="right">: <?= $spp = 500000 ?></td>
        </tr>
        <tr>
            <td>Pendaftaran</td>
            <td class="right">: <?= $pendaf = 100000 ?></td>
        </tr>
        <tr>
            <td>Jumlah Bayar</td>
            <td class="right">: <?= $jml = 600000 ?></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td class="right">: Lunas</td>
        </tr>
    </table>
    <hr>
    <Center><h1>Terima Kasih</h1></Center>

</body>
</html>

<?php

use Dompdf\Dompdf;
$dompdf = new Dompdf();
$dompdf->loadHtml(ob_get_clean());
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');
// Render the HTML as PDF
$dompdf->render();
// Output the generated PDF to Browser
$dompdf->stream('invoice.pdf');
?>