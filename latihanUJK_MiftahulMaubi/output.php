<?php

$getFileJSON = file_get_contents("mahasiswa.json");
$dataMahasiswa = json_decode($getFileJSON);
$index = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="header"><a href="input.php">Form Input</a><a href="output.php">Data Mahasiswa</a></div>
<h1 class="title" align="center">Data Mahasiswa</h1>


    <table cellpadding="5" border="1" align="center">
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
        </tr>
        <?php foreach($dataMahasiswa as $m) : ?>
        <tr>
            <td><?php echo $index + 1 ?></td>
            <td><?php echo $m->nim; ?></td>
            <td><?php echo $m->nama; ?></td>
            <td><?php echo $m->email; ?></td>
        </tr>
        <?php $index++; endforeach; ?>
    </table>
</body>
</html>