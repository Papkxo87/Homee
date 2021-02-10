<?php
$number = $_POST["number"];
$numReg="/^\+?((80|375)\-?)?(\(?(\d{3})\)?\-?)?(\d{2})[-]?(\d{2})[-]?(\d{2})$/ui";
if (preg_match_all($numReg,$number)) {
    echo "<b>Формат телефонного номера верный.</b>".'<br>';
    } else {
    echo "<b>Формат телефонного номера НЕверный.</b>".'<br>';
}

$email = $_POST["email"];
$emReg="/^[0-9A-Z_]{5,}@[0-9A-Z]{2,}\.[A-Z]{2,6}$/iu";
if (preg_match($emReg,$email)) {
    echo "<b>Формат Email верный.</b>".'<br>';
    } else {
    echo "<b>Формат Email НЕверный.</b>".'<br>';
}

$name = $_POST["name"];
$namReg="/^([А-Я]{1}[а-яё]{1,23}|[A-Z]{1}[a-z]{1,23})$/iu";
if (preg_match($namReg,$name)) {
    echo "<b>Формат имени верный.</b>".'<br>';
    } else {
    echo "<b>Формат имени НЕверный.</b>".'<br>';
}

$surname = $_POST["surname"];
$surnamReg="/^([А-Я]{1}[а-яё]{1,23}|[A-Z]{1}[a-z]{1,23})$/iu";
if (preg_match($surnamReg,$surname)) {
    echo "<b>Формат фамилии верный.</b>".'<br>';
    } else {
    echo "<b>Формат фамилии НЕверный.</b>".'<br>';
}

$network = $_POST["network"];
$netReg="/^(https?:\/\/)?(www\.)?vk\.com\/(\w|\d)+?\/?$/iu";
if (preg_match($netReg,$network)) {
    echo "<b>Формат акаунта соц.сетей верный.</b>".'<br>';
    } else {
    echo "<b>Формат акаунта соц.сетей НЕверный.</b>".'<br>';
}

