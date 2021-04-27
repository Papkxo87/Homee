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
}

class NasledCalc extends Calc
{
    public function multi(): float
    {
        return $this->a * $this->b;
    }
    public function div(): float
    {
        return $this->a / $this->b;
    }
}

$calc = new Calc(10, 10);
$nasledcalc = new NasledCalc(4, 2);
echo $calc->diff();
echo $nasledcalc->sum();
