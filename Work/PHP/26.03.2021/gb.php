<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<?php
$link = mysqli_connect("localhost", "root", "root", "guestbook");
$sql = "SELECT * FROM `opros`";
$result = mysqli_query($link, $sql);


echo "<table border='1'>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    <td>$row[id]</td>
    <td>$row[name]</td>
    <td>$row[meropriatie]</td>
    <td>$row[comment]</td>
    <td>$row[phone]</td></tr>";
}
echo "</table>";

mysqli_free_result($result);
mysqli_close($link);
?>
<br>

<form action="add.php" method="POST">
<label>Как вас зовут?</label>
<input type="text" name="name"><br><br>
<label>Как Вам мероприятие?</label>
<textarea name="meropriatie" cols="30" rows="10"></textarea><br><br>
<label>Как Вы узнали про нас?</label>
<input type="text" name="comment"><br><br>
<label>Контактный телефон:</label>
<input type="text" name="phone"><br><br>
<input type="submit" value="ok">
</form>



</body>
</html>