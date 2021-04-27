<?php

class Price extends Table
{
    public function payment(): float
    {
        return ($this->width * $this->length * $this->priceSquare) +
            ($this->height * 4 * $this->priceHeight) +
            $this->priceWork;
    }

}
