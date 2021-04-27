<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <form action="run.php" method="post">
                <div class="mb-3">
                    <label for="validationServer01" class="form-label"></label>
                    <input name="width" type="text" class="form-control is-valid" id="validationServer01" required
                           placeholder="Введите ширину стола"><br>
                    <input name="length" type="text" class="form-control is-valid" id="validationServer01" required
                           placeholder="Введите длину стола"><br>
                    <input name="height" type="text" class="form-control is-valid" id="validationServer01" required
                           placeholder="Введите высоту ножек стола"> <br>
                </div>
                <select name="unit" class="form-select btn-outline-success" aria-label="Default select example">
                    <option selected>Выберите единицу измерения</option>
                    <option value="S">сантиметры</option>
                    <option value="D">дециметры</option>
                    <option value="M">метры</option>
                    <option value="I">дюймы</option>
                </select>
                <br>
                <div class="d-grid gap-2">
                <input type="submit" class="btn btn-outline-success" value="Вычислить стоимость стола">
                </div>
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>
</body>
</html>