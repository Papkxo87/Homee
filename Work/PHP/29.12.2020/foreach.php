<?php

$arr=[10,"two"=>20,30,40,50,];

foreach ($arr as  $value) {
    echo $value."<br>";
}

foreach ($arr as  $key=> $value) {
    echo "$key = $value<br>";
}
