<?php

include "Input.php";

$a = new Input();
$a->setValue("Введите ваше имя: ");
echo $a->html();
