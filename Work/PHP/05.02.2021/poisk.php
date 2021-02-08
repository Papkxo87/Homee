<?php
//$str = $_POST["name"];
/*$result = preg_replace("/:-?\)/iu", "<img src='Smil.png'>", $str);//Замена смайлика
echo $result;*/

//$result="/\*(.*?)\*/iu";
//echo preg_replace($result,"<i>$1</i>",$str);

/*$str=file_get_contents("https://www.onliner.by");
$regexp="/\bминск\b/iu";
echo preg_match_all($regexp,$str);*/

/*$str = $_POST["name"];
$str = preg_replace("/:\)/iu", "<img src='smileee.png'>", $str);
echo preg_replace("/:\(/iu", "<img src='Smil.png'>", $str);*/


/*$str = $_POST["name"];
$pattern = [
    "/:\)/iu",
    "/:\(/iu"
];
$replacement = [
    "<img src='smileee.png'>",
    "<img src='Smil.png'>"
];
echo preg_replace($pattern, $replacement, $str);*/

/*echo preg_replace(
    [
        "/:\)/iu",
        "/:\(/iu"
    ],
    [
        "<img src='smile.png'>",
        "<img src='sad.png'>"
    ],
    $str);*/

//$str = $_POST["name"];
//echo preg_replace(
    //*[
       // "/:-?\)/iu",
       // "/:-?\(/iu",
       // "/:P/iu",
       // "/:-\*/iu",
       // "/=\)/iu"
        
   // ],
   /* [
        "<img src='smileee.png'>",
        "<img src='Smil.png'>",
        "<img src='iazik.png'>",
        "<img src='kiss.png'>",
        "😎"//эмодзи
    ],
    $str
);*/


$str = $_POST["name"];

$regexp="/^[0-9A-Z_]{5,}@[0-9A-Z]{2,}\.[A-Z]{2,6}$/iu";
if (preg_match($regexp,$str)) {
    echo "Майл верный";
    } else {
    echo "Майл не верный";
}




