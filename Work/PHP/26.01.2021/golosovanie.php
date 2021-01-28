<?php

    $id =  $_GET['id'];
    $vote = $_GET['vote'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $ip_file = file_get_contents("ip$id.dat");
    $ip_abbr = explode(",", $ip_file);
    $data = file("$id.dat");
    echo "<table border=0 style='text-align:left' ><th colspan=3 style='text-align:center'><b>$data[0]</b></th>";
    for ($i = 1; $i < count($data); $i++) {
        $votes = explode("~", $data[$i]);
        $graf = 100 * $votes[0] / (count($ip_abbr) - 1);
        echo "<tr><td>$votes[1]</td><td style='text-align: center'><b>$votes[0]</b></td><td><span style='font-size: small'>". round($graf, 3) . "%</span><div style='background: #00BFFF; border:solid;border-color:#6495ED; height:9px; width:" . round($graf, 0) . "px'></div></td></tr>";
    }
    
    if ($vote) {
        $f = fopen("$id.dat", "w");
        fputs($f, "$data[0]");
        for ($i = 1; $i < count($data); $i++) {
            $votes = explode("~", $data[$i]);
            if ($i == $vote) $votes[0]++;
            fputs($f, "$votes[0]~$votes[1]");
        }
        fclose($f);
        $ip_adr = fopen("ip$id.dat", "a++");
        fputs($ip_adr, "$ip" . ",");
    }
