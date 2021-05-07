<?php


abstract class TList extends AbstractParent
{
    protected string $type = "";
    protected string $tagName = "";

    public function __construct()
    {
        $this->tagName = strtolower(get_class($this));
    }

    /**
     * @param string $type
     * @return Lists
     */
    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function html(): string
    {
        $html = array_map(fn($item) => "\t<li>$item</li>\n", $this->data);

        return "<$this->tagName type='$this->type'>\n" . implode("", $html) . "</$this->tagName>";
    }
}