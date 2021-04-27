<?php

class PreamTreygolnik
{
    protected $a;
    protected $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function setA($a)
    {
        if ($a > 0) {
            $this->a = $a;
        }
    }
    public function setB($b)
    {
        if ($b > 0) {
            $this->b = $b;
        }
    }
    public function gipotenuza(): float
    {
        return sqrt($this->a ** 2 + $this->b ** 2);
    }
}

class Ploschad extends PreamTreygolnik
{
    public function ploschad(): float
    {
        return ($this->a * $this->b) / 2;
    }
}


$ploschad = new Ploschad(10, 10);
/*echo $gipotenuza->gipotenuza() . "<br>";*/
//$gipotenuza->setA(5);
//$gipotenuza->setB(5);
/*echo $gipotenuza->gipotenuza(). "<br>";*/
echo $ploschad->ploschad();
