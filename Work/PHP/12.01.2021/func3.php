<?php
function Test()
{
    static $a = 0;
    echo $a;
    $a++;
}
echo Test(); // выводит 0
echo Test(); // выводит 1
echo Test(); // выводит 2
