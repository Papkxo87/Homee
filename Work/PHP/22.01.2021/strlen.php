<?php

/*$trimer = "Hello World";
$str= strlen($trimer);
if ($str<20) {
    echo "ooohhhh noooo";
}else{
    echo "yeeeeessss";
}*/

/*$c= file_get_contents("https://www.onliner.by/");
echo substr_count($c,"moto");*/


//echo str_replace("  ","", $trimer);

/*$c=<<<'TEXT'
<p><b>Это жирный текст</b></p>
<p><strong>Это strong-текст</strong></p>
<p><big>Это большой текст</big></p>
<p><em>Это акцентированный текст</em></p>
<p><i>Это курсив</i></p>
<p><small>Это маленький текст</small></p>
<p>Это<sub> подстрочный</sub> и <sup>надстрочный</sup>текст</p>
TEXT;
echo strip_tags($c);*/

/*$text= "Каждый охотник желает знать где сидит фазан";
$newtext= wordwrap($text, 40, "<br\n>", 1);
echo "$newtext\n";*/

//echo nl2br("Richard\n Of\n York\n Gave\n Battle\n In\n Vain");

//echo htmlspecialchars(file_get_contents("https://www.onliner.by/"));

$text = '
<p>Параграф.</p>
<!--Comments-->
ещё <b>немного</b>текста';

echo strip_tags($text);
echo "\n\n-------\n";
//не удалять <p>и<b>
echo strip_tags($text,'<p><b>');
?>