<?php
class Pre
{
    protected $innerText;

    public function setInnerText($innerText): static
    {
        $this->innerText = $innerText;
        return $this;
    }

    public function html(): string
    {
        return "<pre>$this->innerText</pre>";
    }
}
