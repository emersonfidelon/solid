<?php

namespace App;

class Polygon
{
    private $shape;

    public function setShape(object $shape): void
    {
        $this->shape = $shape;
    }

    public function getShape(): object
    {
        return $this->shape;
    }

    public function getArea(): float
    {
        return $this->getShape()->getWidth() * $this->getShape()->getHeight();
    }
}