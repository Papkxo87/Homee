<?php
abstract class Person
{
    protected $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    public function setName($name)
    {
        if (strlen($name) > 0) {
            $this->name = $name;
        }
    }
    public function setAge($age)
    {
        if ($age > 0) {
            $this->age = $age;
        }
    }

    abstract public function say();
    abstract public function doJob();

}
