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
$link = mysqli_connect("localhost", "root", "root", "Guest Book");
$sql = "SELECT * FROM `gb`";
$result = mysqli_query($link, $sql);


echo "<table border='1'>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>$row[id]</td><td>$row[message]</td><td>$row[name]</td></tr>";
}
echo "</table>";

mysqli_free_result($result);
mysqli_close($link);
?>
<br>

<form action="add.php" method="POST">
<textarea name="message" cols="30" rows="10"></textarea><br>
<input type="text" name="name"><br>
<input type="submit" value="ok">
</form>



</body>
</html>