<?php

class Person
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function say()
    {
        return "Меня зовут $this->name, мне $this->age лет";
    }
}

class Worker extends Person
{
    public function work()
    {
        return "Я умею летать на аэроплане";
    }
}
class Stydent extends Person
{
    public function work()
    {
        return "Я умею ловить рыбу и очень много спать";
    }
}



$man = new Worker("Max", 80);
$boy = new Stydent("Leonid", 25);
//echo $man->say()."<br>";
//echo $boy->say();


echo $man->work();
echo $boy->work();
