<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<form action="add.php" method="post">
    <div class="input-group mb-3">
        <input type="text" name="город" class="form-control" placeholder="Город" aria-label="Username"
               aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Username"
               aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <input type="text" name="пол" class="form-control" placeholder="Пол" aria-label="Username"
               aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <input type="text" name="возраст" class="form-control" placeholder="Возраст" aria-label="Username"
               aria-describedby="basic-addon1">
    </div>

    <input type="submit" class="btn btn-primary" value="Добавить">
</form>
</body>
</html>