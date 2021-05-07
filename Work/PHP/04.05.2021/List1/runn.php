<?php

include "Ls.php";
include "Ol.php";
/*include "Ul.php";*/


$ol= new Ol(['Максим', 'Пётр', 'Василий']);
echo $ol->setType("1")->html();
echo $ol->setType("A")->html();
echo $ol->setType("a")->html();
echo $ol->setType("I")->html();
echo $ol->setType("i")->html();

/*$ul= new Ul(['Ольга', 'Юрий', 'Семён']);
echo $ul->setType("disk")->html();
echo $ul->setType("circle")->html();
echo $ul->setType("square")->html();*/