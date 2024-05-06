<?php

// isset() = memastikan apakah suatu variabel sudah dibuat
if (
!isset($_GET["nama"]) ||
!isset($_GET["nim"]) ||
!isset($_GET["alamat"]) ||
!isset($_GET["prodi"]) ||
!isset($_GET["image"])
) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail <?= $_GET["nama"]?></title>
</head>
<body>
    <table cellpadding="5" align="center">
        <tr>
            <td colspan="4">
                <img src="<?= $_GET["image"]?>"
                style="border: 1px solid black;
                border-radius: 50%;
                margin-left: 60px;">
            </td>
        </tr>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Prodi</th>
        </tr>
        <tr>
            <td><?= $_GET["nim"]?></td>
            <td><?= $_GET["nama"]?></td>
            <td><?= $_GET["alamat"]?></td>
            <td><?= $_GET["prodi"]?></td>
</tr>


    </table>
</body>
</html>