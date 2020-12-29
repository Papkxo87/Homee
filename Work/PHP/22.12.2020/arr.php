<?php
/*$arr= array("somearray"=>array(6=>5,13=>9,"a"=>11));

echo $arr["somearray"] [6].'<br>';
echo $arr["somearray"] [13].'<br>';
echo $arr["somearray"] ["a"].'<br>';

$arr1=array(5=>30,44,56,22,"a"=>1111);

$arr2=array(5=>30,6=>44,7=>56,8=>22,"a"=>1111);
echo "<pre>";
print_r($arr1);
echo $arr1.'<br>';
print_r($arr2);

echo $arr2;*/

$arr1 = [5 => 30,6 => 44,7 => 56, 8 =>22, 9 =>1111];
$arr1[] = 4444;//добавить 
print_r($arr1);
echo $arr1.'<br>';
$arr1["z"] = 77777777;//добавить
print_r($arr1);
echo $arr1.'<br>';
unset($arr1[7]);//удалить элемент
print_r($arr1);
echo $arr1;
