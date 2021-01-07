<?php
if ($_POST['first']) {
    $first = strip_tags($_POST['first']);
}
if ($_POST['second']) {
    $second = strip_tags($_POST['second']);
}
if ($_POST['send']) {
    if (!$_POST['operator']) {
        $rezult = 'Нужно выбрать знак';
    } else {
        if ($_POST['operator'] == 'plus') {
            $rezult = 'Результат сложения :<br>' . ($first + $second);
        }
        if ($_POST['operator'] == 'minus') {
            $rezult = 'Результат минусования :<br>' . ($first - $second);
        }
        if ($_POST['operator'] == 'multi') {
            $rezult = 'Результат умножения :<br>' . $first * $second;
        }
        if ($_POST['operator'] == 'delit') {
            $rezult = 'Результат деления:<br>' . $first / $second;
        }
    }
} else {
    $rezult = 'Простой калькулятор! ';
}
echo $rezult;