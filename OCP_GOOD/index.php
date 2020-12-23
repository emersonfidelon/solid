<?php

require __DIR__."/vendor/autoload.php";

use App\Reader;

$reader = new Reader();
$reader->setFolder(__DIR__."/files");

$reader->setFile('dados.txt');
$array_txt = $reader->readFile();

$reader->setFile('dados.csv');
$array_csv = $reader->readFile();

var_dump(array_merge($array_txt, $array_csv));