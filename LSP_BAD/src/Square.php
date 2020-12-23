<?php

namespace App;

class Square extends Rectangle
{
    public function setWidth(float $width):void
    {
        $this->width = $width;
        $this->height = $width;
    }

    public function setHeight(float $height):void
    {
        $this->height = $height;
        $this->width = $height;
    }
}