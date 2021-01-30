<?php


$day = [
    "Monday" => "СЕГОДНЯ ПОНЕДЕЛЬНИК",
    "Tuesday" => "СЕГОДНЯ ВТОРНИК",
    "Wednesday" => "СЕГОДНЯ СРЕДА",
    "Thursday" => "СЕГОДНЯ ЧЕТВЕРГ",
    "Friday" => "СЕГОДНЯ ПЯТНИЦА",
    "Saturday" => "СЕГОДНЯ СУББОТА",
    "Sunday" => "СЕГОДНЯ ВОСКРЕСЕНЬЕ"
];
$date = date("l");
$today = $day[$date];
echo $today;
