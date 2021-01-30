<?php

if (!empty($_POST)) {
    if (($_POST["name"] != "") && ($_POST["text"] != "")) {
        $row = "\n<----->\n" .
            $_POST["name"] . "\n" .
            $_POST["email"] . "\n" .
            $_POST["text"];
        file_put_contents("guestbook.txt", $row, FILE_APPEND);
        file_put_contents('timetxt.txt', date('Y:m:d:H:i'. "\n"),FILE_APPEND);
        header("Location: ?");
        die();
    }
}

?>