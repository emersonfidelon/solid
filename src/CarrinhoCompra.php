<?php

namespace App;

use App\Item;

class CarrinhoCompra {
    private $items;

    public function __construct() {
        $this->items = [];
    }

    public function getItems():array 
    {
        return $this->items;
    }

    public function adicionarItem(Item $item):bool 
    {
        if($item->isValid()) {
            array_push($this->items, $item);
            return true;
        }

        return false;
    }

    public function validar():bool 
    {
        return count($this->items) > 0;
    }
}