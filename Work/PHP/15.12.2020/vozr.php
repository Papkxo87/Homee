<?php
$vo = $_POST["vo"];

$vo10 = '10';
$vo20 = '20';
$vo30 = '30';

if ($vo <= $vo10) {
    echo "Юноша";
} else if ($vo >= $vo30) {
    echo "Mужчина";
} else {
    echo "Парень";
}
