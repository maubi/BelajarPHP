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
                <td><label for="nama">Nama: </label></td>
                <td><input type="text" id="nama" name="nama"></td>
            </tr>
            <tr>
                <td><label for="nama">Email: </label></td>
                <td><input type="email" id="email" name="email"></td>
            </tr>
            <tr>
                <td><label for="nohp">No. HP: </label></td>
                <td><input type="text" id="nohp" name="nohp"></td>
            </tr>
        </table>
        <br><button type="submit" name="submit">Simpan</button>
    </form>

    <?php 
    if (isset($_POST["submit"])) {
        $getFileJSON = file_get_contents("kontak.json");
        $dataKontak = json_decode($getFileJSON);
        $k = [
            "nama" => $_POST["nama"],
            "email" => $_POST["email"],
            "nohp" => $_POST["nohp"]
        ];
        $dataKontak[] = $k;
        $data = json_encode($dataKontak, JSON_PRETTY_PRINT);
        file_put_contents("kontak.json", $data);
        header("Location: index.php");
    }
    ?>
</body>
</html>