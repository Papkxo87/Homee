<?php

$handle=fopen("https://ru.wikipedia.org/wiki","r");
$contents=' ';
while (!feof($handle)) {
    $contents .= fread($handle, 1);
}
echo $contents;
