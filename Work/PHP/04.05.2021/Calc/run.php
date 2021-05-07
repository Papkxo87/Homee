<?php

include 'autoload.php';


$calc = new SuperCalc(4, 2);

echo "Сумма 'a' и 'b' = " . $calc->sum();

echo "<br>";

echo "Произведение 'a' и 'b' = " . $calc->mult();

echo "<br>";

echo "Деление 'a' на 'b' = " . $calc->div();

echo "<br>";

echo "Разность 'a' и 'b' = " . $calc->diff();

echo "<br>";

echo "Синус 'a' = " . $calc->sinA();

echo "<br>";

echo "Синус 'b' = " . $calc->sinB();

echo "<br>";

echo "Косинус 'a' = " . $calc->cosA();

echo "<br>";

echo "Косинус 'b' = " . $calc->cosB();
