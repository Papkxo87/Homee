<?php

include "a.php";

$a=new A();
$a->setHref("https://www.tut.by");
$a->setinnerText('TUT.BY');
echo $a->html();