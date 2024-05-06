<?php

// Superglobals = variabel PHP yang bisa diakses di mana saja

// $_GET, $_POST, $_SERVER, $_SESSION, $_COOKIE

// METHOD GET dan POST
// GET = Metode pengiriman data melalui link
// POST = Metode pengiriman data lewat form

// GET 

//var_dump($_GET);

/*$_GET["nama"] = "Miftahul";
$_GET["alamat"] = "Klari";
$_GET["umur"] = 19;*/


$siswa = [
    [
        "image" => "https://i.pinimg.com/originals/60/33/a2/6033a2c4900837b34a6010b560f6d35d.jpg",
        "nama" => "Asep Balon",
        "alamat" => "Cikampek",
        "no_hp" => "089506763188"
    ],
    [
        "image" => "https://i.pinimg.com/736x/af/f0/03/aff0036f8dcf249a0e96e1212398b0d1.jpg",
        "nama" => "Budi Busi",
        "alamat" => "Cilamaya",
        "no_hp" => "085710825525"
    ],
    [
        "image" => "https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/01/2023/12/23/siwan-3228391830.jpg",
        "nama" => "Cecep Pancing",
        "alamat" => "Tempuran",
        "no_hp" => "085736361235"
    ]
    ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Daftar Siswa</h1>
    <ul>
        <?php foreach ($siswa as $s) : ?>
        <li><a href="profil.php?nama=<?php echo $s["nama"] ?>
        &alamat=<?php echo $s["alamat"]?>
        &no_hp=<?php echo $s["no_hp"]?>
        &image=<?php echo $s["image"]?>">
        <?php echo $s["nama"]?></a>
</li>
        <?php endforeach; ?>
    </ul>

<?php
?>
</body>
</html>