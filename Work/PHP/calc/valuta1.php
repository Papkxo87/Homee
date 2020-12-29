<?php
$login = $_POST["login"];
$password = $_POST["password"];

$log='mul';
$pass='mup';

if ($login === $log && $password === $pass) {
    echo "WELCOME TO WORLD";
} else {
    echo "ВЫ ВВЕЛИ НЕВЕРНЫЙ ЛОГИН ИЛИ ПАРОЛЬ";
}
