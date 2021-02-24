<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<div class="header-h1">
  <h1><b>Добро пожаловать в гостевую книгу</b></h1>
</div>

    <div class="container">
        <div class="row">
            <div class="col align-self-start">
                <!--One of three columns-->
                <div class="bs-callout bs-callout-danger">
                    <?php
                    include "functions.php";

                    foreach (loadMessages() as $row) {
                        echo "<p>" . dateFormat($row["date_time"]) . "<br>" .//возможно здесь ошибка со временем
                             $row["name"]. "<br></p>" .
                             smile($row["msg"]). "<br>";
                    }
                    ?>
                </div>
            </div>
            <div class="col align-self-center">
                <!--One of three columns-->
                <form action="add.php" method="post">
                    <textarea class="form-control" name="msg" cols="50" rows="5"></textarea><br>
                    <input type="text" name="name">
                    <input class="btn btn-warning" type="submit" value="GO">
                </form>
            </div>
            <div class="col align-self-end">
                <!--One of three columns-->

            </div>
        </div>
    </div>

</body>

</html>