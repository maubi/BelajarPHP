<?php

// Array associative

/*

let siswa = {
    nama : "Mifta",
    alamat : "Klari",
    umur : 17
}
*/

$siswa = [
    "nama" => "Mifta", // key-value pair
    "alamat" => "Klari",
    "umur" => 19
];

echo $siswa["nama"], "<br>";
echo $siswa["alamat"], "<br>";
echo $siswa["umur"];

$arr = [
    [
        "nama" => "Asep Balon",
        "pekerjaan" => "Web Developer",
        "alamat" => "Cikampek"
    ],
    [
        "nama" => "Budi Busi",
        "pekerjaan" => "Teknisi Mobil",
        "alamat" => "Cilamaya"
    ],
    [
        "nama" => "Cecep Pancing",
        "pekerjaan" => "Nelayan",
        "alamat" => "Tempuran"
    ]
    ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associative</title>
</head>
<body>
    <h2> Daftar Kontak </h2>
    <?php foreach ($arr as $a) : ?>
        <ul>
            <li>Nama : <?php echo $a["nama"] ?></li>
            <li>Pekerjaan : <?php echo $a["pekerjaan"] ?></li>
            <li>Alamat : <?php echo $a["alamat"] ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>
