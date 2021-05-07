<?php
include "Calc.php";

$calc = new Calc(1,2);
//$calc->setA(2);
//$calc->a = 3;
//echo $calc->setA(5)->getA();
//echo $calc->a;

//echo $calc->setA(3)->setB(3)->sum();
echo $calc->sum();
echo $calc->setA(3)->setB(3)->sum();
