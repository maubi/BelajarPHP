<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header"><a href="input.php">Form Input</a><a href="output.php">Data Mahasiswa</a></div>
<div class="form-container">
    <form method="post">
    <table cellpadding="10" align="center">
            <tr>
                <td>
                    <label for="nim">NIM </label>
                </td>
                <td>
                    <input type="text" id="nim" name="nim" ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nama">Nama </label>
                </td>
                <td>
                    <input type="text" id="nama" name="nama" ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email </label>
                </td>
                <td>
                    <input type="email" id="email" name="email" ?>
                </td>
            </tr>
            <tr>
                <td colspan="2"><button class="btn" type="submit" name="submit">Kirim</button></td>
            </tr>
        </table>
    </form></div>


    <?php
if (isset($_POST["submit"])) {
    $jsonFile = "mahasiswa.json";
    $getFileJSON = file_get_contents($jsonFile);
    $dataMahasiswa = json_decode($getFileJSON, true);

    $m = [
        "nim" => $_POST["nim"],
        "nama" => $_POST["nama"],
        "email" => $_POST["email"]
    ];

    $dataMahasiswa[] = $m;
    $jsonData = json_encode($dataMahasiswa, JSON_PRETTY_PRINT);
    file_put_contents($jsonFile, $jsonData);

    header("Location: output.php");
    exit;
}

    ?>
</body>
</html>