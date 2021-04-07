<?php
include_once "connect.php";

if (!empty($_POST)) {
    $sql = "INSERT INTO `servis`(`город`, `email`, `пол`, `возраст`) VALUES ('$_POST[город]','$_POST[email]','$_POST[пол]','$_POST[возраст]')";
    /** @var mysqli $link */
    mysqli_query($link, $sql);
}
header("Location: show.php");