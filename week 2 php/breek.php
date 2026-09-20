<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$i = 1;
while ($i <= 15) {
    echo $i . "<br>";
    $i++;
    if ($i == 10) {
        break;
    }
}

$i = 0;
do {
    echo $i . "<br>";
    $i++;
    if ($i == 10) {
        break;
    }
} while ($i <= 15);
?>
</body>
</html>