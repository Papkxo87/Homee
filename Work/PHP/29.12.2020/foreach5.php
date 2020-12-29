<?php

$number = $_POST["op1"];
switch ($number) {
    case "ноль":
        $str = 'zero';
        break;

    case "один":
        $str = 'one';
        break;

    case "два":
        $str = 'two';
        break;

    case "три":
        $str = 'three';
        break;

    case "четыре":
        $str = 'four';
        break;

    case "пять":
        $str = 'five';
        break;

    default:
        $str='Нет такого числа';
        break;
}

echo $number;
