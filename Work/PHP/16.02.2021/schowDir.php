<?php
$dir = array_diff(scandir("files\\"), ['..', '.']);
rsort($dir);
foreach ($dir as $value) {
    echo "<a href='files\\$value'>$value</a><br>";
}