<?php

include "Person.php";
include "Worker.php";
include "Student.php";
include "Engineer.php";

$worker= new Worker("Max", 20);
echo $worker->say()."<br>";
echo $worker->doJob()."<br><br>";

$student= new Student("Leonid", 18);
echo $student->say()."<br>";
echo $student->doJob()."<br><br>";

$engineer= new Engineer("Tolik", 19);
echo $engineer->say()."<br>";
echo $engineer->doJob()."<br>";