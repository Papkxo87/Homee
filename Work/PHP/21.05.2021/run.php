<?php
require __DIR__ . '/vendor/autoload.php';

use Juri\Calc;

$calc = new Calc(2, 3);
echo $calc->sum();
