<?php
class Ol extends Lists
{
    public function html(): string
    {

        $html = parent::html();
        return "<ol type='$this->type'>\n$html</ol>";

    }
}