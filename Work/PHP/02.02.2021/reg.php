<?php

/*if (preg_match("/@/", "step@mail.com")) {
    echo "Yes, we have you e-mail";
} else {
    echo "invalid e-mail";
}*/


/*if (preg_match("/php/i", "PHP is programming language.")) {
    echo "Вхождение найдено";
} else {
    echo "Вхождений не найдено";
}*/

/*$str = "hypertext language programming";
$chars = preg_split("/ /", $str);
print_r($chars);*/

/*$str = "hello world language dogs programming homme";
$chars = preg_split("/b|d/i", $str);
print_r($chars);*/

$str = "not to be";
$pat = "/^(be)|(not\sto\sbe)$/i";
if (preg_match($pat, $str)) {
    echo "Вхождение найдено";
} else {
    echo "Вхождений не найдено";
}