<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 100;//сумма вклада
    $b = 5;//процент годовых
    $x = 10;//количество месяцев
    $y = ($a*$b)/$x;//сумма после капитализации
    echo $y . '<br>';

   
    ?>
</body>
</html>