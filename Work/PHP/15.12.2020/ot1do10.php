<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
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