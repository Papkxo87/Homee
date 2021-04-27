<?php
abstract class Table
{
    protected $width;
    protected $height;
    protected $length;
    protected $pricework=20;
    protected $priccountertop=1;
    protected $pricelegs=1;

    public function __construct($height, $width, $length)
    {
        $this->setWidthS($width);
        $this->setLengthS($length);
        $this->setHeightS($height);
    }

    public function setWidthD(float $width): void
    {
        $this->width = $width;
    }
    public function setLengthD(float $length): void
    {
        $this->length = $length;
    }
    public function setHeightD(float $height): void
    {
        $this->height = $height;
    }
    public function setWidthS(float $width): void
    {
        $this->width = $width / 10;
    }
    public function setLengthS(float $length): void
    {
        $this->length = $length / 10;
    }
    public function setHeightS(float $height): void
    {
        $this->height = $height / 10;
    }
    public function setWidthM(float $width): void
    {
        $this->width = $width * 10;
    }
    public function setLengthM(float $length): void
    {
        $this->length = $length * 10;
    }
    public function setHeightM(float $height): void
    {
        $this->height = $height * 10;
    }
    public function setWidthI(float $width): void
    {
        $this->width = $width / 3.937;
    }
    public function setLengthI(float $length): void
    {
        $this->length = $length / 3.937;
    }
    public function setHeightI(float $height): void
    {
        $this->height = $height / 3.937;
    }

    abstract public function payment(): float;

}
