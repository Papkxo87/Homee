<?php


abstract class TList
{
    protected array $data;
    protected $type;

    public function setData(array $data)
    {
        $this->data = $data;
        return $this;
    }

    public function setType(string $type)
    {
        $this->type = $type;
        return $this;
    }

    public function html(): string
    {
        $html = "";
        foreach ($this->data as $value) {
            $html .= "\t<li>$value</li>\n";
        }

        return $html;
    }
}