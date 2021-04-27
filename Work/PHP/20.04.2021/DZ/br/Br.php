<?php
//Тег <br>
class Br
{
    protected $innerText;

    public function setinnerText($innerText)
    {
        $this->innerText = $innerText;
    }

    public function html()
    {
        return "$this->innerText <br> $this->innerText <br> 
        $this->innerText";
    }
}
