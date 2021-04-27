<?php

class Lada extends Auto
{
    public function drive()
    {
        if ($this->bak > 0) {
            $this->rashodTopliva(15);
            return "Я езжу";
        }
        return "Кончилось топливо";
    }
}
