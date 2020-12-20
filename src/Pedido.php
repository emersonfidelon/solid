<?php

namespace App;

use App\CarrinhoCompra;

class Pedido
{
    private $status;
    private $carrinhoCompra;
    private $valorPedido;

    public function __construct()
    {
        $this->status = 'aberto';
        $this->carrinhoCompra = new CarrinhoCompra();
        $this->valorPedido = 0;
    }

    public function getStatus():string
    {
        return $this->status;
    }

    public function setStatus(string $status):void
    {
        $this->status = $status;
    }

    public function getCarrinhoCompra():CarrinhoCompra
    {
        return $this->carrinhoCompra;
    }

    public function confirmar():bool
    {
        if($this->carrinhoCompra->validar()) {
            $this->setStatus('confirmado');
            return true;
        }

        return false;
    }
}