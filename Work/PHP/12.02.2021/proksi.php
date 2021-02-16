<?php

$headers = get_headers('https://ru.wikipedia.org/', 1);
print_r($headers);