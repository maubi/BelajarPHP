<?php

$siswa = ['Mifta','Adeh', 'Ratna']; // array 1D

// array multidimensi / array di dalam array
$siswa2 = [
    ['1702206', 'Mifta', 'Griya Kondang Asri'],
    ['1702207', 'Adeh', 'Kosambi'],
    ['1702208', 'Ratna', 'Cikampek']
];

echo $siswa2 [0][1];

foreach ($siswa2 as $s) {
    echo "$s[0] | $s[1] | $s[2]", "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($siswa as $s) : ?>
        <ul>
            <li><?php echo $s[0]?></li>
            <li><?php echo $s[1]?></li>
            <li><?php echo $s[2]?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>