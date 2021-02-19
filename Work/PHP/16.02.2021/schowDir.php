<?php
$dir = array_diff(scandir("files\\"), ['..', '.']);

rsort($dir);

foreach ($dir as $value) {

    $jpg = '/^.*\.(jpg|JPG)$/';
    $docx = '/^.*\.(docx|DOCX)$/';
    $pdf = '/^.*\.(pdf|PDF)$/';
    $rar = '/^.*\.(rar|RAR)$/';
    $png = '/^.*\.(png|PNG)$/';
    $ttf = '/^.*\.(ttf|TTF)$/';
    $txt = '/^.*\.(txt|TXT)$/';
    $zip = '/^.*\.(zip|ZIP)$/';

    if (preg_match($jpg, $value)) {
        echo "<a href='files\\$value'>$value</a>" . "<img src='Piktogram/jpg.png'><br>";
    } elseif (preg_match($docx, $value)) {
        echo "<a href='files\\$value'>$value</a>" . "<img src='Piktogram/docx.png'><br>";
    } elseif (preg_match($pdf, $value)) {
        echo "<a href='files\\$value'>$value</a>" . "<img src='Piktogram/PDF.png'><br>";
    } elseif (preg_match($rar, $value)) {
        echo "<a href='files\\$value'>$value</a>" . "<img src='Piktogram/rar.png'><br>";
    } elseif (preg_match($png, $value)) {
        echo "<a href='files\\$value'>$value</a>" . "<img src='Piktogram/png.png'><br>";
    } elseif (preg_match($ttf, $value)) {
        echo "<a href='files\\$value'>$value</a>" . "<img src='Piktogram/ttf.png'><br>";
    } elseif (preg_match($txt, $value)) {
        echo "<a href='files\\$value'>$value</a>" . "<img src='Piktogram/txt.png'><br>";
    } elseif (preg_match($zip, $value)) {
        echo "<a href='files\\$value'>$value</a>" . "<img src='Piktogram/zip.png'><br>";
    }
}



























//тоже работает!!!

//$docx = '/^.*\.(docx|DOCX)$/';
    /*if (preg_match($docx, $value)) {
        echo "<a href='files\\$value'>$value</a>" . "<img src='Piktogram/docx.png'><br>";
    }*/

    /*$pdf = '/^.*\.(pdf|PDF)$/';
    if (preg_match($pdf, $value)) {
        echo "<a href='files\\$value'>$value</a>" . "<img src='Piktogram/PDF.png'><br>";
    }*/

    /*$rar = '/^.*\.(rar|RAR)$/';
    if (preg_match($rar, $value)) {
        echo "<a href='files\\$value'>$value</a>" . "<img src='Piktogram/rar.png'><br>";
    }*/

    /*$png = '/^.*\.(png|PNG)$/';
    if (preg_match($png, $value)) {
        echo "<a href='files\\$value'>$value</a>" . "<img src='Piktogram/png.png'><br>";
    }*/

    /*$ttf = '/^.*\.(ttf|TTF)$/';
    if (preg_match($ttf, $value)) {
        echo "<a href='files\\$value'>$value</a>" . "<img src='Piktogram/ttf.png'><br>";
    }

    $txt = '/^.*\.(txt|TXT)$/';
    if (preg_match($txt, $value)) {
        echo "<a href='files\\$value'>$value</a>" . "<img src='Piktogram/txt.png'><br>";
    }

    $zip = '/^.*\.(zip|ZIP)$/';
    if (preg_match($zip, $value)) {
        echo "<a href='files\\$value'>$value</a>" . "<img src='Piktogram/zip.png'><br>";
    }*/