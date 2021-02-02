<?php

include "guestadd.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUMULATIVE BASE</title>
    <style type="text/css">
        body {
            background: url(lamp.jpg);
            font-size: 30px;
            color: white;
        }

        body:hover {
            color: sandybrown;
        }

        input[type="submit"] {
            width: 100px;
            margin-left: 150px;
            background-color: red;
        }

        input[type="submit"]:hover {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <b>CUMULATIVE BASE &#128190</b>
    <?php
    include "guesttable.php";
    ?>
    <br>
    <b>Enter the required information &#9997</b>
    <form action="?" method="POST">
        <b>NAME &#8658</b><input type="text" name="name"><br>
        <b>EMAIL &#8658</b><input type="text" name="email"><br>
        <b>TEXT &#8658</b><textarea name="text" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="ok">
    </form>
</body>

</html>