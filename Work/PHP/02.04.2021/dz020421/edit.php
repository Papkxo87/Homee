<?php
include_once "connect.php";
$sql = "UPDATE `servis` SET `город`='$_POST[город]',`email`='$_POST[email]',`пол`='$_POST[пол]',`возраст`='$_POST[возраст]' WHERE id=$_POST[id]";
mysqli_query($link, $sql);
header("Location: show.php");
