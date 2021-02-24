<!doctype html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="pop">
    <?php
    include "functions.php";

    foreach (loadMessages() as $row) {
        echo "<p>" . dateFormat($row["date_time"]) . "<br>" .
            smile($row["msg"]) . "<br>" .
            $row["name"] . "<br></p>";
    }
    ?>
</div>
<div class="tut">
    <form action="add.php" method="post">
        <textarea name="msg" cols="50" rows="5"></textarea><br>
        <input type="text" name="name">
        <input type="submit" value="✅">

    </form>
</div>
</body>
</html>