<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Фибоначчи c for
    $z = 25;
    $a = 1;
    for($i=1; $i<$z; $i+=$a) {
    echo $i, ' ';
    $a = $i - $a;
    } 
    echo '<br>';
    
    //Фибоначчи c while
    $z = 25;
    $a = 0;
    $i = 1;
    while ($i < $z) {
        echo $i . ' ';
        $i+=$a;
        $a = $i - $a;
    }
    echo '<br>';

    //Фибоначчи c Do while
    $z = 25;
    $a = 0;
    $i = 1;
    do {
        echo $i . ' ';
        $i+=$a;
        $a = $i - $a;
    } while ($i < $z);

    


    ?>
</body>

</html>