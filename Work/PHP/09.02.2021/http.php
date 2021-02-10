<?php 

//файл не найден
/*header("HTTP//1.0 404 Not Found");*/

//Редирект
/*header('Location:https://www.youtube.com/watch?v=_7xPiZE5nl8');*/

//Тип файла
header('Content-type: application/pdf');

//Имя файла
header('Content-Disposition: attachment; filename="Грокаем алгоритмы.pdf"');

// файл
readfile("Грокаем алгоритмы.pdf");