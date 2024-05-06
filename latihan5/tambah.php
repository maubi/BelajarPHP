<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <form method="post">
    <table cellpadding="5">
            <tr>
                <td>
                    <label for="judul">Judul: </label>
                </td>
                <td>
                    <input type="text" id="judul" name="judul" ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="penulis">Penulis: </label>
                </td>
                <td>
                    <input type="text" id="penulis" name="penulis" ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tahun">Tahun: </label>
                </td>
                <td>
                    <input type="text" id="tahun" name="tahun" ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="penerbit">Penerbit: </label>
                </td>
                <td>
                    <input type="text" id="penerbit" name="penerbit" ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="harga">Harga: </label>
                </td>
                <td>
                    <input type="text" id="harga" name="harga" ?>
                </td>
            </tr>
        </table>
        <br><button type="submit" name="submit">Simpan</button>
    </form>

    <?php 
    if (isset($_POST["submit"])) {
        $getFileJSON = file_get_contents("buku.json");
        $dataBuku = json_decode($getFileJSON);
        $b = [
            "judul" => $_POST["judul"],
            "penulis" => $_POST["penulis"],
            "tahun" => $_POST["tahun"],
            "penerbit" => $_POST["penerbit"],
            "harga" => $_POST["harga"]
        ];
        $dataBuku[] = $b;
        $data = json_encode($dataBuku, JSON_PRETTY_PRINT);
        file_put_contents("buku.json", $data);
        header("Location: index.php");
    }
    ?>
</body>
</html>