<?php

$index = $_GET["index"];
$getFileJSON = file_get_contents("buku.json");
$dataBuku = json_decode($getFileJSON);
$baris = $dataBuku[$index];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <form method="POST">
        <table cellpadding="5">
            <tr>
                <td>
                    <label for="judul">Judul: </label>
                </td>
                <td>
                    <input type="text" id="judul" name="judul" value="<?php echo $baris->judul ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="penulis">Penulis: </label>
                </td>
                <td>
                    <input type="text" id="penulis" name="penulis" value="<?php echo $baris->penulis ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tahun">Tahun: </label>
                </td>
                <td>
                    <input type="text" id="tahun" name="tahun" value="<?php echo $baris->tahun ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="penerbit">Penerbit: </label>
                </td>
                <td>
                    <input type="text" id="penerbit" name="penerbit" value="<?php echo $baris->penerbit ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="harga">Harga: </label>
                </td>
                <td>
                    <input type="text" id="harga" name="harga" value="<?php echo $baris->harga ?>">
                </td>
            </tr>
        </table>

        <button type="submit" name="submit">Simpan</button>
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $b = [
            "judul" => $_POST["judul"],
            "penulis" => $_POST["penulis"],
            "tahun" => $_POST["tahun"],
            "penerbit" => $_POST["penerbit"],
            "harga" => $_POST["harga"]
        ];
        $dataBuku[$index] = $b;
        $data = json_encode($dataBuku, JSON_PRETTY_PRINT);
        file_put_contents("buku.json", $data);
        header("Location: index.php");
    }
    ?>
</body>
</html>