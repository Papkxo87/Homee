<?php
require __DIR__ . '/vendor/autoload.php';

use Juri\Calc;

$calc = new Calc(5,5);
echo $calc->sum()."<br>";
echo $calc->mult()."<br>";
echo $calc->diff();
