<?php
/*$str = "not to be";
$pat = "/^(be)|(not\sto\sbe)$/i";
if (preg_match($pat, $str)) {
    echo "Вхождение найдено";
} else {
    echo "Вхождений не найдено";
}*/

/*$str = "Всем <b>привет</b>!!!";
$pat = "/<b>.*<\/b>/i";
$rep = "<i>$0</i>";
$vid = preg_replace($pat, $rep, $str);
echo $vid;*/

/*$str = "Всем <b>привет</b>!!!";
$pat = "/<b>(.*)<\/b>/i";
$rep = "<i>$1</i>";
$vid = preg_replace($pat, $rep, $str);
echo $vid;*/

$str = "Всем <b>привет</b>!!! Пусть каждый <b>день</b> будет с <b>улыбкой</b>";
$pat = "/<b>(.*?)<\/b>/i";
$rep = "<i>$1</i>";
$vid = preg_replace($pat, $rep, $str);
echo $vid;





