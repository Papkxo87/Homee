<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REZULTAT</title>
    <style type="text/css">
    body{
        background-image: url(compass.jpg);
        background-size: cover;
        text-align: center;
        padding-top:300px;
        font-size: 35px;
        color: black;
    }
    
    </style>
</head>
<body>
    <?php
$sum = 0;
$sum += $_POST['fo1'] == 5;
$sum += $_POST['fo2'] == "Джомолургма";
$sum += $_POST['fo3'] == "Токио";
$sum += $_POST['fo4'] == "Байкал";
$sum += $_POST['fo5'] == "Нил";
$sum += $_POST['fo6'] == "Сахара";
$sum += $_POST['fo7'] == "Ватикан";
$sum += $_POST['fo8'] == "Австралия";
$sum += $_POST['fo9'] == "Евразия";
$sum += $_POST['fo10'] == "Россия";

if ($sum >= 5) {
    echo "ПОЗДРАВЛЯЕМ! ВЫ ЗНАЕТЕ ГЕОГРАФИЮ";
} else {
    echo "НЕ РАССТРАИВАЙТЕСЬ. В СЛЕДУЮЩИЙ РАЗ У ВАС ВСЁ ПОЛУЧИТСЯ";
}
?>
</body>
</html>