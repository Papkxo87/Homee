<?php

//include "autoload.php";
include "Class/Calc1.php";
include "Class/Calc2.php";

use SumMul\Calc as Calc1;
use SubDiv\Calc as Calc2;

$calc1 = new Calc1(2, 3);
echo $calc1->sum()."<br>";
echo $calc1->mul()."<br>";

$calc2 = new Calc2(2, 3);
echo $calc2->sub()."<br>";
echo $calc2->div();
