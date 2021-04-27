<?php

class Engineer extends Person
{
    public function say()
    {
        return "Я engineer, меня зовут $this->name";
    }

    public function doJob(){
        return "Я умею программировать";
    }
}