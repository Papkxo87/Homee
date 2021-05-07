<?php

/*include "autoload.php";
include "unittest.php";

$tic = new TicTac();

print_r($tic
    ->init(2)
    ->putCross(1, 1)
    ->getMap());

test(
    $tic->init(2)->getMap(),
    [
        ["", ""],
        ["", ""]
    ]
);

test(
    $tic->init(3)->getMap(),
    [
        ["", "", ""],
        ["", "", ""],
        ["", "", ""]
    ]
);
test(
    $tic->init(1)->getMap(),
    [
        [""]

    ]
);
test(
    $tic->init(3)->putCross(1,2)->getMap(),
    [
        ["", "", ""],
        ["", "", "X"],
        ["", "", ""]
    ]
);
test(
    $tic->init(3)->putCross(2,2)->getMap(),
    [
        ["", "", ""],
        ["", "", ""],
        ["", "", "X"]
    ]
);
test(
    $tic->init(3)->putZero(2,2)->getMap(),
    [
        ["", "", ""],
        ["", "", ""],
        ["", "", "0"]
    ]
);
test(
    $tic->init(3)->putZero(1,2)->getMap(),
    [
        ["", "", ""],
        ["", "", "0"],
        ["", "", ""]
    ]
);*/



include "autoload.php";
include "unittest.php";

$tic = new TicTac();

$tic
    ->init(3)
    ->putCross(0, 1)
    ->getMap();

//print_r($tictac->init(2)->putCross(1,1)->getMap());

//test($tictac->init(2)->getMap(),[["",""],["",""]]);
//
//test($tictac->init(1)->getMap(),[[""]]);

$map = new Map();

echo $map
    ->setMap($tic->getMap())
    ->getHtmlTable();