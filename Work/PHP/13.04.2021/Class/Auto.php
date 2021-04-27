<?php
abstract class Auto
{
    protected $bak;
    /*public function __construct($bak)
    {
        $this->bak = 0;
    }*/

    public function setBakL($bak)
    {
        $this->bak = $bak;
    }
    public function setBakG($bak)
    {
        $this->bak = $bak * 4.54609;
    }

    public function rashodTopliva($rashod)
    {
        $this->bak -= $rashod;
        if (($this->bak - $rashod) < 0) {
            $this->bak = 0;
        } else {
            $this->bak -= $rashod;
        }
    }

    abstract public function drive();
}
