<?php
/*
$barang1 = "indomie";
$barang2 = "lifebuoy"; 
$barang3 = "sarimie";
$barang4 = "indomilk";
$barang5 =  "floridina";
$barang6 = "frutang";

echo strtoupper(substr($barang1, 0, 3))," - 001, ";
echo "<br>";
echo strtoupper(substr($barang2, 0, 3))," - 002, ";
echo "<br>";
echo strtoupper(substr($barang3, 0, 3))," - 003, ";
echo "<br>";
echo strtoupper(substr($barang4, 0, 3))," - 004, ";
echo "<br>";
echo strtoupper(substr($barang5, 0, 3))," - 005, ";
echo "<br>";
echo strtoupper(substr($barang6, 0, 3))," - 006, ";*/

$barang = ["indomie", "lifebuoy", "sarimie", "indomilk", "floridina", "frutang"];

for ($i = 0; $i < count($barang); $i++) {
    $index = ($i + 1 < 10) ? "00" . ($i + 1) : (($i + 1 < 100) ? "0" . ($i + 1) : ($i + 1));
    echo strtoupper(substr($barang[$i], 0, 3)), " - ", $index, ", ";
}

?>