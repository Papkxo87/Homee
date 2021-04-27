<?php
class Kubik
{
    public $a;

    public function __construct($a)
    {
        $this->a = $a;
    }
    public function ploschad()
    {
        return ($this->a ** 2) * 6;
    }
    public function perimetr()
    {
        return $this->a * 12;
    }
}


$plosc = new Kubik(4);
$perim = new Kubik(5);
echo "Площадь кубика равна " .$plosc->ploschad() . "<br>";
echo "Периметр кубика равен " .$perim->perimetr();
