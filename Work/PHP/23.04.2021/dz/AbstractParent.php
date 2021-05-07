<?php

abstract class AbstractParent
{
    protected array $data = [];
    protected string $class = "";


    /**
     * @param array $data
     * @return AbstractParent
     */
    public function setData(array $data): static
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param string $class
     * @return AbstractParent
     */
    public function setClass(string $class): static
    {
        $this->class = $class;
        return $this;
    }
    abstract public function html(): string;

}
