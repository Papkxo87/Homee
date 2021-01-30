<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Определим, сколько вам лет</title>
</head>

<body>
    <form action="?" method="POST">
        Введите день рождения<input type="text" name="d"><br>
        Введите месяц рождения<input type="text" name="m"><br>
        Введите год рождения<input type="text" name="y">
        <input type="submit" value="ok">
    </form>

    <?php
    $d = $_POST['d'];
    $y = $_POST['y'];
    $m = $_POST['m'];
    function getAge($y, $m, $d)
    {
        if ($m > date('m') || $m == date('m') && $d > date('d'))
            return (date('Y') - $y - 1);
        else
            return (date('Y') - $y);
    }
    echo getAge($y, $m, $d).'<br>';

    echo date("m-d-y(l)\n", mktime(0,0,0,$m,$d,$y));
    ?>
</body>
</html>