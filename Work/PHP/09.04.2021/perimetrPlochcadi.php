<?php

class Preamoygolnik
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

    public function ploch(): float
    {
        return $this->a * $this->b;
    }
}

class PreamoygolnikNew extends Preamoygolnik
{
    public function perim(): float
    {
        return ($this->a + $this->b) * 2;
    }
}

//$ploch = new Preamoygolnik(10, 10);
$perim = new PreamoygolnikNew(10, 10);
//echo $ploch->ploch();
echo $perim->perim() . "<br>";

$perim->setA(20);
$perim->setB(50);

echo $perim->perim();



/*class NasledCalc extends Calc
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
echo $nasledcalc->sum();*/
