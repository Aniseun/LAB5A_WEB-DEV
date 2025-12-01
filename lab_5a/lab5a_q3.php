<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
    function calculateArea($width, $height) {
        return $width * $height;
    }

    // choose any numbers
    $w = 8;
    $h = 5;
    $area = calculateArea($w, $h);
    ?>
    <h2>Area of Rectangle</h2>
    <p>Width: <?php echo $w; ?> units</p>
    <p>Height: <?php echo $h; ?> units</p>
    <p><strong>Area:</strong> <?php echo $area; ?> square units</p>
</body>
</html>
