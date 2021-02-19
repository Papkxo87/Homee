<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style type="text/css">
        body {
            background-color: rebeccapurple;
            font-size: 40px;
            color: white;
        }
    </style>
</head>

<body>
    <?= $random = rand(10, 99); ?>

    <form action="check.php" method="post">
        Введите число прописью &#8658
        <input type="text" name="user">
        <input type="hidden" name="number" value="<?= $random ?>">
        <input type="submit" value="ok">
    </form>
</body>

</html>