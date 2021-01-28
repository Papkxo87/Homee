<?php

function puz($arr)
{
    for ($n = count($arr) - 1; $n > 0; $n--) {
        for ($i = 0; $i <= $n; $i++) {
            if ($arr[$i] < $arr[$i + 1]) {
                $buf = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $buf;
            }
        }
    }
    return $arr;
}

$a = [1, 4, 8, 2, 9, 3];
print_r($a);

$arr2 = puz($a);

print_r($arr2);
