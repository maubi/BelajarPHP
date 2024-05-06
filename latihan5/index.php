<?php

$getFileJSON = file_get_contents("buku.json");
$dataBuku = json_decode($getFileJSON);
$index = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
</head>
<body>
    <h1>Data Buku</h1>

    <a href="tambah.php">Add Data</a>
    <table border="1" celpadding="5">
        <tr>
            <th>No.</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun</th>
            <th>Penerbit</th>
            <th>Harga</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php foreach($dataBuku as $b) : ?>
        <tr>
            <td><?php echo $index + 1 ?></td>
            <td><?php echo $b->judul; ?></td>
            <td><?php echo $b->penulis; ?></td>
            <td><?php echo $b->tahun; ?></td>
            <td><?php echo $b->penerbit; ?></td>
            <td><?php echo $b->harga; ?></td>
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