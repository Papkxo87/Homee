<?php

class Student extends Person
{
    public function say()
    {
        return "Я студент, меня зовут $this->name";
    }

    public function doJob(){
        return "Я умею копать";
    }
}