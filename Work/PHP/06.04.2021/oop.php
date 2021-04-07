<?php
class Kvadrat
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

$toch = new Kvadrat(3, 5);

echo $toch->x;
echo $toch->y;
