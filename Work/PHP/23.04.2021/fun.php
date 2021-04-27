<?php

/*function my_fun($x){
    return $x*$x;
}

$a="my_fun";
echo $a(2);
echo "<br>";
echo $a(3);*/

/*function my_fun(callable $name): void
{
    $name();
}
my_fun(function ():void
{
    echo "Hello";
});*/

/*$a = function (string $name):void
{
    echo "Hello $name<br>";
};
$a("Max");
$b = $a;
$b("Leonid");*/

/*function speed_test(callable $fun, mixed $arg, int $n = 100000): float
{
    $time1 = microtime(TRUE);
    for ($i = 0; $i < $n; $i++) {
        $fun($arg);
    }
    $time2 = microtime(TRUE);
    return $time2 - $time1;
}


function my_sqrt(float $x): float
{
    return pow($x, .5);

}

echo speed_test("sqrt", 20);
echo "<br>";
echo speed_test("my_sqrt", 20);*/

/*$a1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
print_r($a1);

$a2 = array_map(function ($x)
{
    return $x * $x;
}, $a1);
print_r($a2);

$a2 = [];
foreach ($a1 as $value) {
    $a2[] = $value ** 2;
}
print_r($a2);

$a2 = array_map(fn($x) => $x ** 2, $a1);
print_r($a2);*/

/*$a1 = array(1, -2, 3, 4, -5, 6, -7, -8, 9, 10);
print_r($a1);

$a2 = array_filter($a1, function ($x) {
    return $x >= 0;
});
print_r($a2);

$a2 = array_filter($a1, fn($x) => $x >= 0);
print_r($a2);*/

/*$a1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
print_r($a1);

array_walk($a1, function ($item,$key) {echo "$key => $item <br>";});*/

/*$a1 = array(1,2,3,4,5,6,7,8,9,10);
print_r($a1);
array_walk($a1,function (&$item,$key,$sp){
    $item="$key$sp $item";
},"=");
print_r($a1);*/

$zarplata = [
    ["Иванов", 50],
    ["Петров", 200],
    ["Сидоров", 20]
];

array_walk($zarplata, function (&$item) {
    if ($item[1] < 100) {
        $item[1] *= 2;
    }
});
print_r($zarplata);

$zarplata = [
    ["Иванов", 50],
    ["Петров", 200],
    ["Сидоров", 20]
];
foreach ($zarplata as &$value) {

    if ($value[1] < 100) {
        $value[1] *= 2;
    }
}
print_r($zarplata);

