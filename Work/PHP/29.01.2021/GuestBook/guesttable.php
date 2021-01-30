<?php
    $data = file_get_contents("guestbook.txt");
    $records = explode("<----->", $data);
    echo "<table border='1'; style='border:solid;border-color:white;' >";
    foreach ($records as $record) {
        $row = explode("\n", trim($record));
        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
    }
    echo "</table>";
    ?>