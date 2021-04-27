<?php

class Calc
{
    protected $a;
    protected $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }


    public function sum()
    {
        return $this->a + $this->b;
    }
}
