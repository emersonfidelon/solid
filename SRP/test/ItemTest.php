<?php

use PHPUnit\Framework\TestCase;
use App\Item;

class ItemTest extends TestCase {

    public function testEstadoInicialItem(){
        $item = new Item();

        $this->assertEquals('', $item->getDescricao());
        $this->assertEquals(0, $item->getValor());
    }

    public function testGetSetDescricao() {
        $descricao = 'Cadeira de plástico';

        $item = new Item();
        $item->setDescricao($descricao);
        $this->assertEquals($descricao, $item->getDescricao());
    }

    /**
     * @dataProvider dataValores
     */
    public function testGetSetValor($valor) {
        $item = new Item();
        $item->setValor($valor);
        $this->assertEquals($valor, $item->getValor());
    }

    public function dataValores() {
        return [
            [100],
            [-2],
            [0],
        ];
    }

    public function testItemValido() {
        $item = new Item();
        $item->setDescricao('Medalha de prata');
        $item->setValor(23.67);
        $this->assertEquals(true,$item->isValid());

        $item->setDescricao('');
        $item->setValor(23.45);
        $this->assertEquals(false,$item->isValid());

        $item->setDescricao('Medalha de ouro');
        $item->setValor(0);
        $this->assertEquals(false,$item->isValid());

        $item->setDescricao('');
        $item->setValor(0);
        $this->assertEquals(false,$item->isValid());
    }
}