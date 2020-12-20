<?php

use App\CarrinhoCompra;
use App\Pedido;
use App\Item;
use PHPUnit\Framework\TestCase;

class PedidoTest extends TestCase
{
    public function testConstruct(){
        $pedido = new Pedido();

        $this->assertInstanceOf(CarrinhoCompra::class, $pedido->getCarrinhoCompra());
        $this->assertEquals('aberto', $pedido->getStatus());
        $this->assertEquals(0, $pedido->getValorPedido());
    }

    public function testGetSetStatus() {
        $pedido = new Pedido();
        $pedido->setStatus('fechado');
        $this->assertEquals('fechado', $pedido->getStatus());
    }

    public function testConfirmar() {
        $pedido = new Pedido();
        $item = new Item();
        $item->setDescricao('copo');
        $item->setValor(23.4);
        $pedido->getCarrinhoCompra()->setItem($item);
        $this->assertEquals(true, $pedido->confirmar());
    }
}