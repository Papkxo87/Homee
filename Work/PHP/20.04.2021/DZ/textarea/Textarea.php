<?php
//Тег <textarea>
class Textarea
{
    protected $innerText;

    public function setinnerText($innerText)
    {
        $this->innerText = $innerText;
    }

    public function html()
    {
        return "<textarea>$this->innerText $this->innerText  
        $this->innerText</textarea>";
    }
}