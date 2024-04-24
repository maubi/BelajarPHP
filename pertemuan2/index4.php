<?php

// User defined function
/*
function namaFUngsi($param1, $param2, $param3,...){

}
*/

function penjumlahan($a, $b)
{
    return $a + $b;
}

echo penjumlahan(4, 3), "<br>";

function luasSegitiga($alas, $tinggi) // Define the luasSegitiga() function
{
    return 0.5 * $alas * $tinggi;
}

$alas = 4;
$tinggi = 5;
echo "Luas segitiga dengan panjang alas $alas dan tinggi $tinggi adalah " . luasSegitiga($alas, $tinggi);

function sapa($waktu = "", $nama = "")
{
    if ($waktu === "" && $nama === "") {
        return "Selamat Datang, User!";
    } else {
        return "Selamat $waktu, $nama!";
    }
}

echo sapa("Pagi", "Mifta");

// Array
// Creating an array in PHP
$arr = array(1,2,3,5,6,7,8);
print_r($arr);
// Creating an array in PHP (new way)
$arr2 = ["Mifta", "Adeh", "Ratna", "Fikih"];

print_r($arr2);
print "<br>";
var_dump($arr2);
print "<br>";
echo $arr2[3];

// Adding an element to the array
$arr2[] = "Jannah";


// Foreach
foreach($arr2 as $a){
    echo $a , "<br>";
}

?>