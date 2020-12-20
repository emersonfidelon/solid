<?php

namespace App;

use App\File;

class Reader {
    private $folder;
    private $file;

    public function getFolder():string 
    {
        return $this->folder;
    }

    public function setFolder(string $folder):void 
    {
        $this->folder = $folder;
    }

    public function getFile():string 
    {
        return $this->file;
    }

    public function setFile(string $file):void 
    {
        $this->file = $file;
    }

    public function readFile():array {
        $path = $this->getFolder()."/".$this->getFile();
        $file = new File();
        $file->readFileCSV($path);

        return $file->getData();
    }
}