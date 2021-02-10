<?php

$a = file_get_contents("jpg");
echo preg_replace("/\d/", "<img src='img/$0.gif'>", $a);
file_put_contents("jpg", ($a + 1));
/*echo preg_replace(
    [
        "/1/ui",
        "/2/ui",
        "/3/ui",
        "/4/ui",
        "/5/ui",
        "/6/ui",
        "/7/ui",
        "/8/ui",
        "/9/ui",
        "/10/ui",
        "/0/ui"
        
   ],
   [
        "<img src='1.jpg'>",
        "<img src='2.jpg'>",
        "<img src='3.jpg'>",
        "<img src='4.jpg'>",
        "<img src='5.jpg'>",
        "<img src='6.jpg'>",
        "<img src='7.jpg'>",
        "<img src='8.jpg'>",
        "<img src='9.jpg'>",
        "<img src='10.jpg'>",
        "<img src='0.jpg'>"
    ],
    $str
);*/