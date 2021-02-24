<?php

function cenzur($text1)
{
    return  preg_replace("/(дурак)|(d(u|y)rak)/ui", "****", $text1);
}
