<?php

namespace App\extractor;

class File
{
    private $data = array();

    public function setData(array $data):void
    {
        array_push($this->data, 
            [
                'name' => iconv('iso-8859-1', 'utf-8', $data[0]),
                'cpf' => iconv('iso-8859-1', 'utf-8', $data[1]),
                'email' => iconv('iso-8859-1', 'utf-8', $data[2]),
            ]
        );
    }

    public function getData():array
    {
        return $this->data;
    }
}