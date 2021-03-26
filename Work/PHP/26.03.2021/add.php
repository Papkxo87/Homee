<?php

$link = mysqli_connect("localhost", "root", "root", "Guest Book");

if(!empty($_POST)){
$sql="INSERT INTO 'gb' ('message', 'name') VALUES ('$_POST[message]', '$_POST[name]')";
mysqli_query($link,$sql);
}

header("Location: gb.php");