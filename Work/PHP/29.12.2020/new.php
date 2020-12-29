<?php
/*$arr=[1,2,3,4,5,6,7,8,9,10,11];
for ($i=0; $i < count($arr) ; $i++) { 
    echo $arr [$i]."<br>" ;
}

foreach ($arr as  $value) {
    echo $value."<br>";
}*/

//выводит сумму элементов
$arr=[4,20,30,40,50,66,77,88,98,10];
$sum=0;
for ($i=0; $i < count($arr) ; $i++) {
    $sum+=$arr[$i]; 
}
echo $sum."<br>";

$b=0;
foreach ($arr as  $value) {
    $b+=$value;
}
echo $b;