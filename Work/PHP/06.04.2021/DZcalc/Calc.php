<?php
class Calc
{
    public $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function kvKor(): float
    {
        return sqrt($this->a);
    }

    public function sinus(): float
    {
        return sin($this->a);
    }

    public function cosinus(): float
    {
        return cos($this->a);
    }

    public function modul(): float
    {
        return abs($this->a);
    }

    
}
