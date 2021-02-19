<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style type="text/css">
    body{
        background-color: rebeccapurple;
        font-size: 40px;
        color: white;
    }
    </style>
</head>
<body>
<?php
$number = $_POST["number"];
$user = $_POST["user"];
$arr = ["ноль", "один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять"];
if (preg_match("/.*(" . $arr[$number[0]] . ")\s+(" . $arr[$number[1]] . ").*/iu", $user)) {
    echo "<b>Вы не робот. Можно продолжить регистрацию.</b>";
} else {
    echo "<b>Вы не человек. В доступе отказано!</b>";
}
?>
</body>
</html>