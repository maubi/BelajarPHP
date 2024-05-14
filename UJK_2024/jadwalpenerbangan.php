<?php

$getFileJSON = file_get_contents("penerbangan.json");
$dataPenerbangan = json_decode($getFileJSON);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Penerbangan</title>
    <link rel="stylesheet" href="jadwalpenerbangan.css">
</head>
<body>
<h1 class="title" align="center">Jadwal Penerbangan</h1>

    <table cellpadding="5" border="1" align="center">
        <tr>
            <th>Kode Pesawat</th>
            <th>Nama Pesawat</th>
            <th>Dari</th>
            <th>Tujuan</th>
            <th>Tanggal Berangkat</th>
            <th>Jam Berangkat</th>
            <th>Harga Tiket</th>
            <th>Pemesanan Tiket</th>
        </tr>
        <?php foreach($dataPenerbangan as $p) : ?>
        <tr>
            <td><?php echo $p->kode_pesawat; ?></td>
            <td><?php echo $p->nama_pesawat; ?></td>
            <td><?php echo $p->dari; ?></td>
            <td><?php echo $p->tujuan; ?></td>
            <td><?php echo $p->tanggal_berangkat; ?></td>
            <td><?php echo $p->jam_berangkat; ?></td>
            <td><?php echo $p->harga_tiket; ?></td>
            <td><button class="pesan-button" onclick="window.location.href='pemesanantiket.php?kode_pesawat=<?php echo $p->kode_pesawat; ?>'">Pesan</button></td>

        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
