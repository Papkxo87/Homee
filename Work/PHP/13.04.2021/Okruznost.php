<?php
class Okruznost
{
    public $a;

    public function __construct($a)
    {
        $this->a = $a;
    }
    public function ploschad()
    {
        return ($this->a ** 2) * pi();
    }
    public function perimetr()
    {
        return  $this->a * 2 * pi();
    }
}


$plosc = new Okruznost(4);
$perim = new Okruznost(5);
echo "Площадь окружности равна " .$plosc->ploschad() . "<br>";
echo "Периметр окружности равен " . $perim->perimetr();
