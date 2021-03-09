<?php

//echo $_POST["calc"];
preg_match(('/(\d)(\+|\*|\*\*|-|\/)(\d)/'), $_POST["calc"], $maches);
$a = $maches[1];
$b = $maches[3];
$operation = $maches[2];
switch ($operation) {
    case "+":
        $result = $a + $b;
        break;
    case "-":
        $result = $a - $b;
        break;
    case "*":
        $result = $a * $b;
        break;
    case "/":
        $result = $a / $b;
        break;
    case "**":
        $result = $a ** $b;
        break;
    default:
        $result = "The operation is incorrect";
}
echo $result;

/*echo match ($operation) {
    "+" => $a + $b,
    "-" => $a - $b,
    "*" => $a * $b,
    "/" => $a / $b,
    "**" => $a ** $b,
    default=>"Ohh nooo"
};*/
