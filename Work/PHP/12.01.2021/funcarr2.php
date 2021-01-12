<?php
/*function takes_array($input)
{

    echo "$input[0]+$input[1]=",
        $input[0] + $input[1];
}
$input = [3, 6];
takes_array($input);//3+6=9*/

/*function arr_sum($arr)
{
    $sum = 0;
    foreach ($arr as $value) {
        $sum += $value;
    }
    return $sum;
}
$arr = [1, 2, 3, 4, 5, 6];//сумма

echo arr_sum($arr);*/

/*function arrMin($array)
{
    $sum = 1;
    foreach ($array as  $value) {
        $sum *= $value;
    }
    return $sum;
}
echo array_product([5555, 24343434, 19343434, 0]);//произведение*/


$myNames = ['Иван', 'Юрий', 'Сергей', 'Олег', 'Макс', 'Андрей'];
function arrayNames($array)
{
    echo "<ul>";
    foreach ($array as $value) {
        echo "<li>$value</li>";
    }
    echo "</ul>";
}
echo arrayNames($myNames);// выводит маркированый список имён



//DZ 15.01
$vedomost=[
    [1,'Иван',200],
    [2,'Сергей',200],
    [3,'Макс',600],
    [4,'Стив',900],
    [5,'Клаус',300],
    [6,'Корри',100],
    [7,'Борис',400]
    
];
print_r($vedomost);
