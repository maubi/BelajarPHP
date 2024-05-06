<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Siswa</title>
</head>
<body>
    <ul>
        <li><img width ="300" src="<?php echo $_GET ["image"]?>"></li>
        <li><?php echo $_GET ["nama"]?></li>
        <li><?php echo $_GET ["alamat"]?></li>
        <li><?php echo $_GET ["no_hp"]?></li>
    </ul>
</body>
</html>