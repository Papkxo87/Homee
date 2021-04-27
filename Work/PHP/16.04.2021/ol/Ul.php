<?php


class Ul
{
    protected $data;
    protected $type;

    public function setData(array $data): Ul
    {
        $this->data = $data;
        return $this;
    }

    public function setType($type): Ul
    {
        $this->type = $type;
        return $this;
    }

    public function html()
    {
        $html = "";
        foreach ($this->data as $value) {
            $html .= "\t<li>$value</li>\n";
        }
        return "<ul type='$this->type'>\n$html</ul>";
    }

}