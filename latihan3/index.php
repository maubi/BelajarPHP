<?php 

include("mahasiswa.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP - Method GET</title>
</head>
<body>
<h1 align="center"> Daftar Mahasiswa UNIKO </h1>
    <table border="1" cellpadding="5" align="center">
<tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Foto</th>
        <th colspan="3">Aksi</th>
</tr>

<?php foreach ($arr as $a) : ?>

<tr>
        <td><?php echo $a["nim"]?></td>
        <td><?php echo $a["nama"] ?></td>
        <td>
            <img width ="200" src="<?php echo $a["image"] ?>">
        </td>
        <td>
            <a href="detail.php?nim=<?= $a["nim"]?>&nama=<?php echo $a["nama"]?>&alamat=<?php echo $a["alamat"]?>&prodi=<?php echo $a["prodi"]?>&image=<?php echo $a["image"]?> ">Lihat</a>
        </td>

        <td>
            <a href="#">Edit</a>
        </td>
        <td>
            <a href="#">Hapus</a>
        </td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>