<?php

namespace App\polygons;

class Square
{

    protected $width;
    protected $height;

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

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }
}