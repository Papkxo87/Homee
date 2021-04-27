<?php
spl_autoload_register(function ($class) {
//    echo  $class;
    include "Classes/$class.php";
});


//$calc = new Calc(2,3);
//
//echo $calc->sum();

$calc2= new Division(3,3);
echo $calc2->div();

