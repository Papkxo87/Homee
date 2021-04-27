<?php
include_once "A.php";
include_once "Pre.php";
include_once "Ul.php";

$a = new A();
//echo $a->setHref("https://www.tut.by/")->setInnerText("TUT.BY")->html();
//echo $a->setInnerText("крутой сайт")->html();
echo $a->html();
$a->setInnerText("TUT.BY");
echo $a->html();

$pre = new Pre();
echo $pre
    ->setInnerText("Hello\n Word Hi\n Word")
    ->html();

$ul = new Ul();
echo $ul
    ->setData(["Иванов", "Петров", "Сидоров"])
    ->setType("square")
    ->html();
echo $ul
    ->setType("circle")
    ->html();