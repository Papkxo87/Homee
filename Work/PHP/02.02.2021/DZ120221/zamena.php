<?php
//Замена слова дурак на "ай-яй-яй"
$str = $_POST["name"];
$pat="/(дурак)|(d(u|y)rak)/ui";
$ret="ай-яй-яй";
$str1=preg_replace($pat,$ret,$str);
echo "Ваше сообщение: ".$str1.'<br>';

//Подсчёт количества слова "Привет"
$stro="/(привет)|(privet)/ui";
$sovpad=preg_match_all($stro,$str,$out,PREG_SET_ORDER);
$rez=count($out);
echo '<br>'."Количество совпадений слова ПРИВЕТ: ".$rez;