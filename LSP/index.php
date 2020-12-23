<?php

require __DIR__."/vendor/autoload.php";

use App\Rectangle;
use App\Square;

echo '<h3>Retangulo</h3>';
$rectangle = new Rectangle();
$rectangle->setWidth(5);
$rectangle->setHeight(10);

echo $rectangle->getArea();

echo '<h3>Quadrado</h3>';
$square = new Square();
$square->setWidth(5);

echo $square->getArea();

echo '<h3>Deveria retornar 50 considerando que o quadrado é um retangulo</h3>';
$rectangle2 = new Square();
$rectangle2->setWidth(5);
$rectangle2->setHeight(10);

echo $rectangle2->getArea();