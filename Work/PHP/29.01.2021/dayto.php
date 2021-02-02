<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1">
    <title>Document</title>
</head>

<body>
    <?php

    $today = time();

    $start = mktime(0, 0, 0, 6, 12, 2021);
    $second = $start - $today;
    $days = floor($second / (60 * 60 * 24));
    $h = floor(($second % (60 * 60 * 24)) / (60 * 60));
    $m = floor(($second % (60 * 60)) / 60);
    $s = $second % 60;

    echo "До выпускного Юлькина осталось $days дней, $h часов, $m минут, $s секунд";
    ?>
</body>

</html>