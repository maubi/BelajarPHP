<?php

$umur = [
    'Edi' => 21,
    'Budi' => 19,
    'Agus' => 20,
    'Septi' => 25,
    'Rudi' => 18
];

ksort($umur);

foreach ($umur as $nama => $nilai_umur) {
    echo "$nama: $nilai_umur <br>";
}
?>