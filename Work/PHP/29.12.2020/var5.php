<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = 100; //сумма вклада
    $b = 5; //процент годовых
    $x = 12; //количество месяцев
    $y = $a;
    //сумма после капитализации
    for ($i = 1; $i <= $x; $i++) {
        $y = $y + ($y / 100 * $b);
        echo $y . '<br>';
    }

    //оператор цикла с параметром
    $n = 10;
    $s = 0;
    for ($i = 1; $i <= $n; $i++) {
        $s = $i;
        echo $s . '<br>';
    }

    //оператор цикла с предусловием
    $n = 10;
    $s = 0;
    $i = 1;
    while ($i <= $n) {
        $s = $i;
        $i = $i + 1;
        echo $s . '<br>';
    }

    //оператор цикла с постусловием
    $n = 10;
    $s = 0;
    $i = 1;
    do {
        $s = $i;
        $i = $i + 1;
        echo $s . '<br>';
    } while ($i <= $n);

    ?>
</body>
</html>