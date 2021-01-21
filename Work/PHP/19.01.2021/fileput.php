<?php
/*echo file_get_contents("fileget.txt"); 
echo $sum ++;
file_put_contents("fileget.txt", ++$sum);
file_put_contents("fileget.txt", file_get_contents("https://www.onliner.by"));*/

//file_put_contents("fileget.txt", file_get_contents("https://www.php.net/manual/ru/funcref.php"));

$sum=file_get_contents("https://www.php.net/manual/ru/indexes.functions.php");
echo substr_count($sum, '<a href="function');