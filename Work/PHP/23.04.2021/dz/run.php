<?php
include_once "Tlist.php";
include_once "Ul.php";
include_once "Ol.php";

$ul = new Ul();
echo $ul
    ->setData(["Иванов", "Петров", "Сидоров"])
    ->setType("square")
    ->html();
echo $ul
    ->setType("circle")
    ->html();

    $ol = new Ol();
echo $ol
    ->setData(["Иванов", "Петров", "Сидоров"])
    ->setType("square")
    ->html();
echo $ol
    ->setType("circle")
    ->html();