<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $marks = 87;

    switch (true) {
        case ($marks >= 90):
            echo "Grade A";
            break;
        case ($marks >= 80):
            echo "Grade B";
            break;
        case ($marks >= 70):
            echo "Grade C";
            break;
        default:
            echo "Fail";
            break;
    }
    ?>
</body>
</html>
