<?php

$link = mysqli_connect("localhost", "root", "root", "guestbook");

if(!empty($_POST)){
$sql="INSERT INTO 'opros' ('id','name', 'meropriatie', 'comment', 'phone') ('$_POST[name]', '$_POST[meropriatie]','$_POST[comment]','$_POST[phone]')";
mysqli_query($link,$sql);
}

header("Location: gb.php");