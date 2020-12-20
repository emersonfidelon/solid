<?php

require __DIR__."/vendor/autoload.php";

use App\Reader;

$reader = new Reader();
$reader->setFolder(__DIR__."/files");
$reader->setFile('dados.csv');
var_dump($reader->readFile());