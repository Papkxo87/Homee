<?php
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$fun=$_POST['fun'];


if($fun=='sum')
$num3=$num1+$num2;

if($fun=='min')
$num3=$num1-$num2;

if($fun=='um')
$num3=$num1*$num2;

if($fun=='del' && $num2!=0)
$num3=$num1/$num2;


if($fun=='step')
$num3=pow($num1,$num2);

if($fun=='proc')
$num3=($num1*$num2)/100;

if($fun=='koren')
$num3=sqrt($num1);

echo $num3;
