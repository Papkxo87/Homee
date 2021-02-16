<?php
echo "HTTP";// сгенирирует ошибку, т.к. до header нельзя ничего писать
header("HTTP//1.0 404 Not Found");