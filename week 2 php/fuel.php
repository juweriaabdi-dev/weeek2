<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fuel = 0;
    echo ($fuel < 1 ? "low thanks" : "full thanks");
    echo "<br>";

    for ($count = 1; $count <= 10; $count++) {
        echo "The count is: $count <br>";
    }

    for ($count = 1; $count <= 15; $count++) {
        if ($count % 2 == 0) {
            echo "The count is: $count <br>";
        }
    }
    ?>
</body>
</html>