<?php

class Table extends AbstractParent
{
    protected array $headers = [];

    /**
     * @param array $headers
     * @return Table
     */
    public function setHeaders(array $headers): static
    {
        $this->headers = $headers;
        return $this;
    }

    /**
     * @return string
     */
    public function html(): string
    {
        $header = "<tr>" . implode("", array_map(fn($cell) => "<th>$cell</th>", $this->headers)) . "</tr>";

        $html = array_map(
            fn($row) => "<tr>" . implode("", array_map(fn($cell) => "<td>$cell</td>", $row)) . "</tr>",
            $this->data
        );

        return "<table class='$this->class'>$header" . implode("", $html) . "</table>";

    }
}
