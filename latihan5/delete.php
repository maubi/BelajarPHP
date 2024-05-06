<?php

$index = $_GET["index"];
$getFileJSON = file_get_contents("buku.json");
$dataBuku = json_decode($getFileJSON);
unset($dataBuku[$index]);
$data = json_encode(array_values($dataBuku), JSON_PRETTY_PRINT);
        file_put_contents("buku.json", $data);
        header("Location: index.php");

?>