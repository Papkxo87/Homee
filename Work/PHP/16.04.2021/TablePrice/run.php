<?php

$rez = new Price();

$rez->{"setLength$_POST[unit]"}($_POST["length"]);
$rez->{"setHeight$_POST[unit]"}($_POST["height"]);
$rez->{"setWidth$_POST[unit]"}($_POST["width"]);
echo round($rez->payment(), 2) . '$';