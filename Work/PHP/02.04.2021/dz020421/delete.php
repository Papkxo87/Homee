<?php
include_once "connect.php";

$sql="DELETE FROM servis WHERE id = $_GET[id]";
mysqli_query($link, $sql);

header("Location: show.php");