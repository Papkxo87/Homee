<?php
function smile ($text) {

    return  preg_replace( [
        "/:-?\)/iu",
        "/:-?\(/iu",
        "/:P/iu",
        "/:-\*/iu"
    ],
    [
        '😁',
        "😞",
        "😜",
        "😘"
    ],$text);
}
