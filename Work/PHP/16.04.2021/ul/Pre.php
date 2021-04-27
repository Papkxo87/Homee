<?php
class Pre
{
    protected $innerText;

    public function setInnerText($innerText)
    {
        $this->innerText = $innerText;
        return $this;
    }

    public function html()
    {
        return "<pre>$this->innerText</pre>";
    }
}
