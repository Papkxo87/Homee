<?php
$str=file_get_contents("https://www.who.int/ru/emergencies/diseases/novel-coronavirus-2019");
$txt="/\bCOVID(.*?)\b/iu";
echo "Совпадения со словом <b>COVID:</b> ". preg_match_all($txt,$str);