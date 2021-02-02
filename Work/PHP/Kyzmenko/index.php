<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1">
    <title>Кузя получает серьёзное образование</title>
    <style type="text/css">
        body {
            background: url('1.jpg');
            font-size: 40px;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            color: white;
        }

        b {
            text-align: center;
        }
    </style>
</head>

<body>
    <b>КУЗЯ хотела серьёзное образование, чтобы стать СУПЕРГЕРОЕМ<br>
        и бороться с преступностью...ииии тепеееерь &#8658<br><br>
        <?php

        $today = time();

        $start = mktime(0, 0, 0, 6, 12, 2021);
        $second = $start - $today;
        $days = floor($second / (60 * 60 * 24));
        $h = floor(($second % (60 * 60 * 24)) / (60 * 60));
        $m = floor(($second % (60 * 60)) / 60);
        $s = $second % 60;

        echo "<b>ДО ВЫПУСКНОГО ДНЯ КУЗИ осталось</b>" . '<br>';
        echo "<b><i>$days дней, $h часов, $m минут, $s секунд</i></b>" . '<br>';
        ?>
        <br><b>И В СВОБОДНОЕ ПЛАВАНИЕ...<br>время пострелять &#8853<br>
            мур,мур,мур...детка &#9829&#9829&#9829&#9829&#9829&#9829</b>
</body>

</html>