<?php
//программа с параметром для расчета факториала 5!
$n = 5;
$factorial = 1;

for ($i = 1; $i <= $n; $i++) {
    $factorial *= $i;
}
echo $factorial . '<br>';

//программа с постусловием для расчета факториала 5!
$n = 5;
$factorial = 1;
$i = 1;
do {
    $factorial *= $i;
    $i++;
} while ($i <= $n);
echo $factorial . '<br>';

//программа с предусловием для расчета факториала 5!
$n = 5;
$factorial = 1;
$i = 1;
while ($i <= $n) {
    $factorial *= $i;
    $i++;
}
echo $factorial;