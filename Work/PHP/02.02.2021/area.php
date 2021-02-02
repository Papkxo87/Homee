<?php
$hhh=$_POST[hhh];

$str = "Всем <b>привет</b>!!! Пусть каждый <b>день</b> будет с <b>улыбкой</b>";
$pat = "/<b>(.*?)<\/b>/i";
$rep = "<i>$1</i>";
$vid = preg_replace($pat, $rep, $str);
echo $vid;