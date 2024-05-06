<?php

$index = $_GET["index"];
$getFileJSON = file_get_contents("kontak.json");
$dataKontak = json_decode($getFileJSON);
unset($dataKontak[$index]);
$data = json_encode(array_values($dataKontak), JSON_PRETTY_PRINT);
        file_put_contents("kontak.json", $data);
        header("Location: index.php");

?>