<?php

include_once "Table.php";

$a = new Tablee();
$a->setinnerText("№","Имя","Фамилия",1,"Юрий",
"Семёнов",2,"Иван","Селезнёв",3,"Максим","Титов");

echo $a->html();
