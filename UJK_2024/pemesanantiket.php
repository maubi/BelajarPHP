<?php

$getFileJSON = file_get_contents("penerbangan.json");
$dataPenerbangan = json_decode($getFileJSON);
$kode_pesawat = $_GET['kode_pesawat'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket</title>
    <link rel="stylesheet" href="pemesanantiket.css">
</head>
<body>
<div class="header"><a class="a2" href="jadwalpenerbangan.php">Beranda</a></div>   
<?php
$selected_flight = null;
foreach ($dataPenerbangan as $p) {
    if ($p->kode_pesawat === $kode_pesawat) {
        $selected_flight = $p;
        break;
    }
}

if ($selected_flight) {
?>
    <h2 align='center'>Detail Penerbangan</h2>
    <table class="table1" border='1' align='center'>
        <tr><th>Kode Pesawat</th><td><?php echo $selected_flight->kode_pesawat; ?></td></tr>
        <tr><th>Nama Pesawat</th><td><?php echo $selected_flight->nama_pesawat; ?></td></tr>
        <tr><th>Dari</th><td><?php echo $selected_flight->dari; ?></td></tr>
        <tr><th>Tujuan</th><td><?php echo $selected_flight->tujuan; ?></td></tr>
        <tr><th>Tanggal Berangkat</th><td><?php echo $selected_flight->tanggal_berangkat; ?></td></tr>
        <tr><th>Jam Berangkat</th><td><?php echo $selected_flight->jam_berangkat; ?></td></tr>
        <tr><th>Harga Tiket</th><td><?php echo $selected_flight->harga_tiket; ?></td></tr>
    </table>
<?php
} else {
    echo "<p align='center'>Pesawat tidak ditemukan.</p>";
}
?>
<h2 align="center">Formulir Pemesanan Tiket</h2>

<div class="form-container">
    <form method="post">
        <input type="hidden" name="kode_pesawat" value="<?php echo $selected_flight->kode_pesawat; ?>">
        <input type="hidden" name="nama_pesawat" value="<?php echo $selected_flight->nama_pesawat; ?>">
        <input type="hidden" name="dari" value="<?php echo $selected_flight->dari; ?>">
        <input type="hidden" name="tujuan" value="<?php echo $selected_flight->tujuan; ?>">
        <input type="hidden" name="tanggal_berangkat" value="<?php echo $selected_flight->tanggal_berangkat; ?>">
        <input type="hidden" name="jam_berangkat" value="<?php echo $selected_flight->jam_berangkat; ?>">
        <input type="hidden" name="harga_tiket" value="<?php echo $selected_flight->harga_tiket; ?>">
        
        <label for="jumlah_tiket_dipesan">Jumlah Tiket Dipesan </label><br>
        <input type="number" id="jumlah_tiket_dipesan" name="jumlah_tiket_dipesan" required><br>
        
        <label for="nama_pemesan">Nama Pemesan </label>
        <input type="text" id="nama_pemesan" name="nama_pemesan" required>
        
        <label for="email_pemesan">Email Pemesan </label>
        <input type="email" id="email_pemesan" name="email_pemesan" required>
        
        <button class="btn" type="submit" name="submit">Pesan</button>
    </form>
</div>

<?php
if (isset($_POST["submit"])) {
    $jsonFile = "order.json";
    $dataPemesan = json_decode(file_get_contents($jsonFile), true);

    $jumlah_tiket_dipesan = $_POST["jumlah_tiket_dipesan"];
    $harga_tiket = $_POST["harga_tiket"];
    $total_harga = $jumlah_tiket_dipesan * $harga_tiket;

    $p = [
        "jumlah_tiket_dipesan" => $jumlah_tiket_dipesan,
        "nama_pemesan" => $_POST["nama_pemesan"],
        "email_pemesan" => $_POST["email_pemesan"],
        "kode_pesawat" => $_POST["kode_pesawat"],
        "nama_pesawat" => $_POST["nama_pesawat"],
        "dari" => $_POST["dari"],
        "tujuan" => $_POST["tujuan"],
        "tanggal_berangkat" => $_POST["tanggal_berangkat"],
        "jam_berangkat" => $_POST["jam_berangkat"],
        "harga_tiket" => $harga_tiket,
        "total_harga" => $total_harga
    ];

    $dataPemesan[] = $p;
    file_put_contents($jsonFile, json_encode($dataPemesan, JSON_PRETTY_PRINT));

    header("Location: tiket.php");
    exit;
}
?>

</body>
</html>
