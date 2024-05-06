<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP - Method POST</title>
</head>
<body>
    <form action="" method="POST">
        <label for="nama">Nama :</label>
        <input type="text" id="nama" name="nama"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php if(isset($_POST ["nama"])) : ?>
    <h1>Halo, <?php echo $_POST ["nama"] ?></h1>
    <?php endif ?>
</body>
</html>