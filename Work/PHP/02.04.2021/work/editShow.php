<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include_once "connect.php";

$sql = "SELECT * FROM vedomost WHERE id = $_GET[id]";
/** @var mysqli $link */
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
?>

<form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    <input type="text" name="name" value="<?= $row['name'] ?>">
    <input type="text" name="zp" value="<?= $row['zp'] ?>">
    <input type="submit" value="сохранить">
</form>
</body>
</html>


