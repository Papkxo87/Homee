<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Уравнение №1
    $a = 6;
    $b = 2;
    $x = 4;
    $e = 5;
    $y = ($a * $x + 2 * $b * $x ** 2) * abs(cos($x ** 2)) / pi($e ** $x);
    echo $y . '<br>';
    
    //Уравнение №2
    $a = 10;
    $b = 9;
    $x = 4;
    $l = 2;
    $n = 4;
    $y = (($a * $l * $n * ($b * $x))) ^ (1 / 3) / 1 + 2 * sin($a * $x) - sin(2 * $a * $x);
    echo $y . '<br>';
    
    //Уравнение №3
    $a = 10;
    $b = 9;
    $x = 4;
    $e = 2;
    $c = 4;
    $y = ((abs(sin($x ** 3)) + $a) * $e ** $a) / (($b ** 2 + $c ** 2) ^ (1 / 3));
    echo $y . '<br>';
    ?>
</body>
</html>