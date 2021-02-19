<?php
//print_r($_FILES);

move_uploaded_file($_FILES["userfile"]["tmp_name"], "files\\" . $_FILES["userfile"]["name"]);
header("Location: fileOtpr.php");
