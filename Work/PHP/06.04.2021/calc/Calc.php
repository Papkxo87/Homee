<?php
class Calc
{
    public $a;
    public $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function sum(): float
    {
        return $this->a + $this->b;
    }

    public function diff(): float
    {
        return $this->a - $this->b;
    }

    public function multi(): float
    {
        return $this->a * $this->b;
    }

    public function div(): float
    {
        return $this->a / $this->b;
    }

    public function degree(): float
    {
        return $this->a ** $this->b;
    }
}
