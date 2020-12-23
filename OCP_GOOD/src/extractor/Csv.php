<?php

namespace App\extractor;

class Csv extends File {
    public function readFile(string $path):array
    {
        $handle = fopen($path, 'r');

        while (($row = fgetcsv($handle, 10000, ';')) !== false) {
            $this->setData($row);
        }
        
        fclose($handle);

        return $this->getData();
    }
}