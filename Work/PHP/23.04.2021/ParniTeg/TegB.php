<?php

class Audi extends Car {
    public function intro() : string {
        return "<p title='Hello!' >Choose German quality! I'm an $this->name!</p>";
    }
}
