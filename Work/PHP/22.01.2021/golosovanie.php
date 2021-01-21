<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMW как состояние души</title>
    <style type="text/css">
        body {
            background-image: url(23-bmw.jpg);
            background-size: cover;
        }

        h1 {
            font-size: 80px;
            color: rgba(212, 6, 85, 0.918);
            text-shadow: 1px 0 2px white;
            margin-top: 0px;
        }

        ul {
            padding-left: 70px;
            color: rgba(212, 6, 85, 0.918);
            /*text-shadow: 1px 0 2px white;*/
            position: absolute;
            top: 20px;
            left: 1000px;
        }

        li {
            display: inline;
            padding: 3px;
        }

        a {
            color: rgba(212, 6, 85, 0.918)
        }

        a:hover {
            color: white;
        }

        img {
            position: absolute;
            height: 60px;
            width: 60px;
            padding-left: 500px;
            top: 27px;
        }

        iframe {
            height: 160px;
            width: 260px;
        }

        iframe:hover {
            height: 360px;
            width: 660px;

        }

        form {
            font-size: 20px;

        }
    </style>
</head>

<body>
    <div>
        <h1><b><i>BMW Lifestyle</i></b></h1>
        <ul>
            <li><a href="https://www.bmw.by/ru/topics/offers-and-services/lifestyle.html" target="_blank">BMW</a></li>
            <li><a href="#" target="_blank">GALLERY</a></li>
            <li><a href="#" target="_blank">HISTORY</a></li>
            <li><a href="#" target="_blank">MARKET</a></li>
        </ul>
        <img src="bmw.png" alt="">
        <?php

        $id =  $_GET['id'];
        $vote = $_GET['vote'];
        $ip = $_SERVER['REMOTE_ADDR']; //помещается IP-адрес клиента(127.0.0.1.)
        $ip_file = file_get_contents("ip$id.dat");
        $ip_abbr = explode(",", $ip_file);
        $data = file("$id.dat");
        echo "<table border=0 style='text-align:left' ><th colspan=3 style='text-align:center'><b>$data[0]</b></th>";
        for ($i = 1; $i < count($data); $i++) {
            $votes = explode("~", $data[$i]); // значение~ответ
            $graf = 100 * $votes[0] / (count($ip_abbr) - 1);
            echo "<tr><td>$votes[1]</td><td style='text-align: center'><b>$votes[0]</b></td><td> <span style='font-size: small'>" . round($graf, 3) . "%</span><div style='background: red; height:5px; width:" . round($graf, 0) . "px'></div></td></tr>";
        }
        echo "<tr><td>Всего<b></b></td><td>" . (count($ip_abbr) - 1) . "</td><td>&nbsp;</td></tr></table>";
        if ($vote) {
            $f = fopen("$id.dat", "w");
            flock($f, LOCK_EX);
            fputs($f, "$data[0]");
            for ($i = 1; $i < count($data); $i++) {
                $votes = explode("~", $data[$i]);
                if ($i == $vote) $votes[0]++;
                fputs($f, "$votes[0]~$votes[1]");
                fflush($f);
                flock($f, LOCK_UN);
            }
            fclose($f);
            $ip_adr = fopen("ip$id.dat", "a++");
            flock($ip_adr, LOCK_EX);
            fputs($ip_adr, "$ip" . ",");
            fflush($ip_adr);
            flock($ip_adr, LOCK_UN);
            fclose($ip_adr);
        }
        ?>

</body>

</html>