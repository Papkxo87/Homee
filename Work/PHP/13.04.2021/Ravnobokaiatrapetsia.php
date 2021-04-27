<?php
class Ravnobokaiatrapetsia
{
    public $a;
    public $b;
    public $h;

    public function __construct($a,$b,$h)
    {
        $this->a = $a;
        $this->b = $b;
        $this->h = $h;
    }
    public function ploschad()
    {
        return (($this->a + $this->b) / 2) * $this->h;
    }
    public function perimetr()
    {
        return ($this->a * 2) + $this->b + $this->h;
    }
}


$plosc = new RavnobokaiaTrapetsia(4, 5, 7);
$perim = new RavnobokaiaTrapetsia(4, 5, 7);
echo "Площадь трапеции равна " . $plosc->ploschad() . "<br>";
echo "Периметр ерапеции равен " . $perim->perimetr();
