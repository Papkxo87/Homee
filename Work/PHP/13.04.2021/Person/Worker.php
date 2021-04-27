<?php

class Worker extends Person
{
    public function say()
    {
        return "Я рабочий, меня зовут $this->name";
    }

    public function doJob(){
        return "Я умею стоить";
    }
}