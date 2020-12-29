<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
   
    $many = 100;
    $month = 7;
    $percent = 1.5;
    $s=$many;
    for ($i=1; $i <=$month; $i++) { 
        $s=$s+($s/100*$percent);
    }
   
    echo round($s, 2)  . '<br>';//округлили до 2 цифр после запятой

    ?>
</body>

</html>