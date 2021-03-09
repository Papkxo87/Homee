<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Простой калькулятор</title>
    <Style></Style>
</head>

<body>

    <?php
    if (empty($_POST['task'])) {      //Проверяем пуста или нет переменная
        $result = 'Задача не выбрана. Пожалуйста выберите задачу.';
    } elseif (empty($_POST['a'])) {     //Проверяем пуста или нет переменная
        $result = 'Вы не ввели число в первую форму. Пожалуйста, заполните все поля.';
    } elseif (empty($_POST['b'])) {     //Проверяем пуста или нет переменная
        $result = 'Вы не ввели число во вторую форму. Пожалуйста, заполните все поля.';
    } else {
        $a = $_POST['a'];             
        $b = $_POST['b'];             
        $task = $_POST['task'];       

        if ($task == '+') {
            $result = $a + $b;
        } elseif ($task == '*') {
            $result = $a * $b;
        } elseif ($task == '/') {
            $result = $a / $b;
        } else {
            $result = $a - $b;
        }
    }
?>
    
    <form class="wrapper" action="" method="post">
        <table class="main">
            <tr>           '😁' ПРОСТОЙ КАЛЬКУЛЯТОР '😁'
                <td><input class="in" type="text" name="a" /><br>
                    <input class="in" type="text" name="b" />
                </td>
            </tr>
            <tr>
                <td><input type="radio" name="task" value="-" />Отнять</td>
            </tr>
            <tr>
                <td><input type="radio" name="task" value="/" />Разделить</td>
            </tr>
            <tr>
                <td><input type="radio" name="task" value="*" />Умножить</td>
            </tr>
            <tr>
                <td><input type="radio" name="task" value="+" />Прибавить</td>
            </tr>
            <tr>
                <td><input class="in" type="submit" name="submit" value="Решить" /></td>
            </tr>
            <tr>
            <td><?php echo 'РЕЗУЛЬТАТ: ' . $result;?></td>
            </tr>
            <table>
    </form>
</body>

</html>