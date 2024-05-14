<?php
$getFileJSON = file_get_contents("order.json");
$dataPemesan = json_decode($getFileJSON);
$dataPemesan = array_pop($dataPemesan);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rincian Tiket</title>
    <link rel="stylesheet" href="tiket.css">
</head>
<body>
<div class="header"><a class="a2" href="jadwalpenerbangan.php">Beranda</a></div>   
<h1 class="title" align="center">Rincian Tiket</h1>
<table cellpadding="5" border="1" align="center">
    <tr>
        <th>Nama Pemesan</th><td><?php echo $dataPemesan->nama_pemesan; ?></td>
    </tr>
    <tr>
        <th>Email Pemesan</th><td><?php echo $dataPemesan->email_pemesan; ?></td>
    </tr>
    <tr>
        <th>Jumlah Tiket Dipesan</th><td><?php echo $dataPemesan->jumlah_tiket_dipesan; ?></td>
    </tr>
    <tr>
        <th>Kode Pesawat</th><td><?php echo $dataPemesan->kode_pesawat; ?></td>
    </tr>
    <tr>
        <th>Nama Pesawat</th><td><?php echo $dataPemesan->nama_pesawat; ?></td>
    </tr>
    <tr>
        <th>Dari</th><td><?php echo $dataPemesan->dari; ?></td>
    </tr>
    <tr>
        <th>Tujuan</th><td><?php echo $dataPemesan->tujuan; ?></td>
    </tr>
    <tr>
        <th>Tanggal Berangkat</th><td><?php echo $dataPemesan->tanggal_berangkat; ?></td>
    </tr>
    <tr>
        <th>Jam Berangkat</th><td><?php echo $dataPemesan->jam_berangkat; ?></td>
    </tr>
    <tr>
        <th>Harga Tiket</th><td><?php echo $dataPemesan->harga_tiket; ?></td>
    </tr>
    <tr>
        <th>Total Harga</th><td><?php echo $dataPemesan->total_harga; ?></td>
    </tr>
</table>
</body>
</html>
