<?php
header('WWW-Authenticate: Basic realm="Test Authentication System"');

if ($_SERVER['PHP_AUTH_USER']==123 && $_SERVER['PHP_AUTH_PW']==321) {
    header('location: wellcome.php');
}else{
    header('location: bye.php');
}