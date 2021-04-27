<?php
//Тег <input>
class Input
{
    protected string $value;

    public function setValue($value): static
    {
      $this->value = $value;
      return $this;
    }

    public function html(): string
    {
        return "<input value='$this->value'>";
    }
}