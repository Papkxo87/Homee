<?php
spl_autoload_register(function ($class) {
    $path = str_replace("\\", "/", "Class/$class.php");
    if (file_exists($path)) {
        include $path;
    }
});
