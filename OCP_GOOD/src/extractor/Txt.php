<?php

namespace App\extractor;

class Txt extends File {

    public function readFile(string $path):array 
    {
        $handle = fopen($path, 'r');

        while (!feof($handle)) {
            $row = fgets($handle);
            $data = [
                substr($row, 11, 30),
                substr($row, 0, 11),
                substr($row, 41, 50)
            ];

            $this->setData($data);
        }

        fclose($handle);

        return $this->getData();
    }
}