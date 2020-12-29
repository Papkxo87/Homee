<?php

$namber = [
    ноль => "zero",
    один => "one",
    два => "two",
    три => "three",
    четыре => "four",
    пять => "five"
];

if (isset($namber[$op])) {
    echo $namber[$op];
} else {
    echo "нет такого слова";
}

$op = $_POST["op1"];

echo $namber[$op];
