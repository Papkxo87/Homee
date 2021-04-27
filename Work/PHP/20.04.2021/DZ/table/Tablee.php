<?php
//Тег <table>
class Tablee
{
    protected $innerText;
    protected $innerText1;
    protected $innerText2;
    protected $innerText3;
    protected $innerText4;
    protected $innerText5;
    protected $innerText6;
    protected $innerText7;
    protected $innerText8;
    protected $innerText9;
    protected $innerText10;
    protected $innerText11;

    public function setinnerText($innerText,$innerText1,$innerText2,
    $innerText3,$innerText4,$innerText5,$innerText6,$innerText7,
    $innerText8,$innerText9,$innerText10,$innerText11)
    {
        $this->innerText = $innerText;
        $this->innerText1 = $innerText1;
        $this->innerText2 = $innerText2;
        $this->innerText3 = $innerText3;
        $this->innerText4 = $innerText4;
        $this->innerText5 = $innerText5;
        $this->innerText6 = $innerText6;
        $this->innerText7 = $innerText7;
        $this->innerText8 = $innerText8;
        $this->innerText9 = $innerText9;
        $this->innerText10 = $innerText10;
        $this->innerText11 = $innerText11;
    }
    public function html()
    {
        return "<table border=2><tr><td>$this->innerText</td><td>$this->innerText1</td><td>$this->innerText2</td></tr>
        <tr><td>$this->innerText3</td><td>$this->innerText4</td><td>$this->innerText5</td></tr>
        <tr><td>$this->innerText6</td><td>$this->innerText7</td><td>$this->innerText8</td></tr>
        <tr><td>$this->innerText9</td><td>$this->innerText10</td><td>$this->innerText11</td></tr></table>";
    }
}