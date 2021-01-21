<?php

$arr = explode(':', file_get_contents('str.txt'));
$arr[2]++;
print_r($arr);
file_put_contents('str.txt', implode(':', $arr));



