<?php

$link = mysqli_connect("localhost", "root", "root", "guestbook");

if(!empty($_POST)){
$sql="INSERT INTO myguests ('id', 'name', 'meropriatie', 'comment', 'phone')
VALUES ('$_POST[name]', '$_POST[meropriatie]','$_POST[comment]','$_POST[phone]')";
mysqli_query($link,$sql);
}

header("Location: qwerty.php");

//header('Content-Disposition: attachment; filename="file.csv"');

//$link = mysqli_connect("localhost", "root", "root", "guestbook");

//$sql = "SELECT * FROM `opros`";

/*$result = mysqli_query($link, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "$row[name];$row[meropriatie];$row[comment];$row[phone]\n";
}*/