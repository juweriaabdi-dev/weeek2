<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$Age = 20;

if ($Age > 18) {
    echo "Adult";
} else if ($Age > 0) {
    echo "Child";
} else {
    echo "Invalid age";
}

?>
</body>
</html>