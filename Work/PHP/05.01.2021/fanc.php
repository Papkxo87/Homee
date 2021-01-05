<?php

/*function maxiis2($a, $b)
{
    if ($a > $b) {
        $res = $a;
    } else {
        $res = $b;
    }
    return $res;
}

$a = 1;
$b = 111;
$c = 9;
$d = 4;
$e = 500000;

echo maxiis2(maxiis2(maxiis2(maxiis2($a, $b), $c), $d), $e);*/


function min2($a, $b)
{
    return $a < $b ? $a : $b;
}

$a = 1333;
$b = 11;
$c = 3;
$d = 33;
$e = 500000;

echo min2(min2(min2(min2($a, $b), $c), $d), $e);
