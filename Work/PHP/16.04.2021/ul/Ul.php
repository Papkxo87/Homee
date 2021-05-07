<?php


class Ul extends Lists
{
    public function html(): string
    {

        $html = parent::html();
        return "<ul type='$this->type'>\n$html</ul>";

    }
}