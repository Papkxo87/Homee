<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
    include_once "connect.php";
    $sql = "SELECT * FROM `servis` WHERE id = $_GET[id]";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
      <form action="edit.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <input type="text" name="город" value="<?= $row['город'] ?>">
        <input type="text" name="email" value="<?= $row['email'] ?>">
        <input type="text" name="пол" value="<?= $row['пол'] ?>">
        <input type="text" name="возраст" value="<?= $row['возраст'] ?>">
        <input class="btn btn-warning" type="submit" value="Сохранить">
    </form>
   
    
</body>

</html>