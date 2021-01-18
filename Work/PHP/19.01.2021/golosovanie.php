<?php

$id = $_GET["id"];
$vote = $_GET["vote"];


if (file_exists("$id.dat")) { //проверяем, существует ли такое голосование

    $ip = $_SERVER['REMOTE_ADDR']; //получаем ip адрес
    $ip_file = file_get_contents("ip$id.dat"); //читаем содержимое файла ip адресов и помещаем в строку
    $ip_abbr = explode(",", $ip_file); //получаем в массив имеющиеся ip адреса

    $data = file("$id.dat"); //читаем содержимое файла результатов и помещаем в массив

    // выводим заголовок голосования - 1я строка файла
    echo "<b>$data[0]</b><p>";

    // печатаем список ответов и результатов - остальные строки
    for ($i = 1; $i < count($data); $i++) {
        $votes = explode("~", $data[$i]); // значение~ответ
        echo "$votes[1]: <b>$votes[0]</b><br>"; //поменяйте местами 0 и 1 в $votes и в результатах цифры будут первыми
    }
    echo "<br>Всего проголосовало: <b>" . (count($ip_abbr) - 1) . "</b>";

    // производим необходимые действия для учета голоса
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

        //и записываем ip
        $ip_adr = fopen("ip$id.dat", "a++");
        flock($ip_adr, LOCK_EX);
        fputs($ip_adr, "$ip" . ",");
        fflush($ip_adr);
        flock($ip_adr, LOCK_UN);
        fclose($ip_adr);
    }
} else {
    //передан id несуществующего голосования
    echo "Такого голосования не существует.";
    exit;
}
