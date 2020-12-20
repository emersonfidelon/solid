<?php

use App\CarrinhoCompra;
use PHPUnit\Framework\TestCase;
use App\Item;

class CarrinhoCompraTest extends TestCase
{
    public function testConstruct(){
        $carrinho = new CarrinhoCompra();

        $this->assertIsArray($carrinho->getItems());
    }

    public function testSetItem() {
        $item = new Item();
        $item->setDescricao('Manteiga');
        $item->setValor('25.35');

        $carrinho = new CarrinhoCompra();
        $carrinho->setItem($item);

        $this->assertContains($item, $carrinho->getItems());
    }

    public function testIsValid() {
        $item = new Item();
        $item->setDescricao('Arroz');
        $item->setValor('32');

        $carrinho = new CarrinhoCompra();
        $carrinho->setItem($item);
        $this->assertEquals(true, $carrinho->isValid());
    }
}