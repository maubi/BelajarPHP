<?php
// PHP di dalam HTML
// cara membuat variabel di PHP
// variabel $
// scope = cangkupan
// variabel global && variabel local
// variabel global = variabel yang bisa diakses di mana saja
// variabel local = variabel yang hanya bisa di akses di bagian tertentu
$angka = 20;
echo $angka;
$nama = "Miftahul Maubi";

//concatenation
$nama_depan = "Miftahul";
$nama_belakang = "Maubi";

echo $nama_depan . " " . $nama_belakang;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP Dasar</title>
</head>
<body>
    <h1><?php echo "Selamat datang $nama "; ?></h1>
</body>
</html>