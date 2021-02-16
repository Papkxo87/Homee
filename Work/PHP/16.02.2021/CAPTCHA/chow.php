<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?= $random = rand(10, 99); ?>

<form action="check.php" method="post">
    Введите число прописью.
    <input type="text" name="userNumber">
    <input type="hidden" name="number" value="<?= $random ?>">
    <input type="submit" value="ok">
</form>
</body>
</html>