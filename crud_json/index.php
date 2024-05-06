<?php

$getFileJSON = file_get_contents("kontak.json");
$dataKontak = json_decode($getFileJSON);
$index = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kontak</title>
</head>
<body>
    <h1>Data Kontak</h1>

    <a href="tambah.php">Add Data</a>
    <table border="1" celpadding="5">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No.HP</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php foreach($dataKontak as $k) : ?>
        <tr>
            <td><?php echo $index + 1 ?></td>
            <td><?php echo $k->nama; ?></td>
            <td><?php echo $k->email; ?></td>
            <td><?php echo $k->nohp; ?></td>
            <td>
                <a href="edit.php?index=<?php echo $index; ?>">Edit</a>
            </td>
            <td>
                <a href="delete.php?index=<?php echo $index; ?>">Delete</a>
            </td>
        </tr>
        <?php $index++; endforeach; ?>
    </table>
</body>
</html>