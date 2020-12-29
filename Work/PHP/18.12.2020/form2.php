<?php
//add NO
/*if(true and !true ){
    echo "YES";
}else{
    echo "NO";
}*/

//add YES
/*if(true or !true ){
    echo "YES";
}else{
    echo "NO";
}*/

/*if (0 xor 0) {
    echo "YES";
} else {
    echo "NO";
}*/

//выводит число а потом прибавляет и выводит
/*$a=2;
echo $a--;
echo "<br>";
echo $a;*/

//определяет тип переменной
/*$a=12.1;
echo gettype($a);*/

$a = 12;
if (is_int($a)) {
    echo "YES";
} else {
    echo "NO";
}
