<?php

include "autoLoad.php";
include "unittest.php";

$tictac = new TicTac(3);
$tictac
    ->putCross(1, 1)
    ->getMap();

test(
    $tictac
        ->init(2)
        ->getMap(),
    [
        ["", ""],
        ["", ""]
    ]
);

test(
    $tictac
        ->init(3)
        ->getMap(),
    [
        ["", "", ""],
        ["", "", ""],
        ["", "", ""]
    ]
);
test(
    $tictac
        ->init(1)
        ->getMap(),
    [
        [""]

    ]
);
test(
    $tictac
        ->init(3)
        ->putCross(1, 2)
        ->getMap(),
    [
        ["", "", ""],
        ["", "", "X"],
        ["", "", ""]
    ]
);
test(
    $tictac
        ->init(3)
        ->putCross(2, 2)
        ->getMap(),
    [
        ["", "", ""],
        ["", "", ""],
        ["", "", "X"]
    ]
);
test(
    $tictac
        ->init(3)
        ->putZero(2, 2)
        ->getMap(),
    [
        ["", "", ""],
        ["", "", ""],
        ["", "", "O"]
    ]
);
test(
    $tictac
        ->init(3)
        ->putZero(1, 2)
        ->getMap(),
    [
        ["", "", ""],
        ["", "", "O"],
        ["", "", ""]
    ]
);
test(
    $tictac
        ->init(3)
        ->putCross(2, 1)
        ->putZero(1, 1)
        ->putCross(2, 2)
        ->putZero(0, 2)
        ->putCross(2, 0)
        ->getMap(),
    [
        ["", "", "O"],
        ["", "O", ""],
        ["X", "X", "X"]
    ]
);

test(
    $tictac
        ->init(3)
        ->putCross(2, 1)
        ->putZero(1, 1)
        ->putCross(2, 2)
        ->putZero(0, 2)
        ->putCross(2, 0)
        ->checkWinner(),
    true
);
test(
    $tictac
        ->init(3)
        ->checkWinner(),
    false
);
test(
    $tictac
        ->init(3)
        ->putCross(1, 1)
        ->putZero(2, 1)
        ->putCross(0, 2)
        ->putZero(2, 2)
        ->putCross(1, 2)
        ->putZero(2, 0)
        ->checkWinner(),
    true
);
test(
    $tictac->setMap([
        ["O", "", ""],
        ["O", "", ""],
        ["O", "", ""]
    ])->checkWinner(),
    true
);

test(
    $tictac->setMap([
        ["", "", ""],
        ["", "", ""],
        ["", "", ""]
    ])->checkWinnerByDiagonal(),
    false
);

test(
    $tictac->setMap([
        ["X", "", ""],
        ["", "X", ""],
        ["", "", "X"]
    ])->checkWinnerByDiagonal(),
    true
);

test(
    $tictac->setMap([
        ["O", "", ""],
        ["", "O", ""],
        ["", "", "O"]
    ])->checkWinnerByDiagonal(),
    true
);

test(
    $tictac->setMap([
        ["O", ""],
        ["", "O"],
    ])->checkWinnerByDiagonal(),
    true
);

test(
    $tictac->setMap([
        ["X", "", "0", "", "0"],
        ["", "X", "0", "0", ""],
        ["", "", "0", "", ""],
        ["", "0", "X", "X", ""],
        ["0", "", "X", "", "X"]

    ])->checkWinnerByPobochDiagonal(),
    true
);
//$map=new Map();
//echo $map
//    ->setMap($tictac->getMap())
//    ->getHtmlTable();
