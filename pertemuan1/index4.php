<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program untuk menentukan tahun Kabisat</title>
</head>
<body>
<?php 
    $tahun = 2021;

    if ($tahun % 400 === 0 || $tahun % 4 === 0 )
    {echo "$tahun adalah tahun kabisat";} 
    else 
    {echo "$tahun adalah bukan tahun kabisat";}
    ?>
       
</body>
</html>