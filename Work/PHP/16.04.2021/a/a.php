<?php
//<a href='https://www.tut.by'>tut</a>
class A{
    protected $href;
    protected $innerText;

    public function setHref($href){
        $this->href=$href;
    }

    public function setinnerText($innerText){
        $this->innerText=$innerText;
    }

    public function html(){
        return "<a href='$this->href'>$this->innerText</a>";
    }


}