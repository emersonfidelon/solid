<?php

require __DIR__."/vendor/autoload.php";

use App\Polygon;
use App\polygons\Rectangle;
use App\polygons\Square;

$polygon = new Polygon();
$polygon->setShape(new Rectangle());
$polygon->getShape()->setHeight(5);
$polygon->getShape()->setWidth(10);

echo "<h3>A área do retangulo é: {$polygon->getArea()}</h3>";

var_dump($polygon);


$polygon = new Polygon();
$polygon->setShape(new Square());
$polygon->getShape()->setHeight(5);

echo "<h3>A área do quadrado é: {$polygon->getArea()}</h3>";

var_dump($polygon);
