<?php
require __DIR__.'/vendor/autoload.php';

use App\CarrinhoCompra;
use App\Item;
use App\Pedido;
use App\EmailService;

$pedido = new Pedido();

$item1 = new Item();
$item2 = new Item();

$item1->setDescricao('Porta copos');
$item1->setValor(4.55);

$item2->setDescricao('Luminária');
$item2->setValor(8.35);

echo "<h3>Pedido sem items</h3>";

dd($pedido);

echo "<h3>Pedido com items</h3>";

$pedido->getCarrinhoCompra()->adicionarItem($item1);
$pedido->getCarrinhoCompra()->adicionarItem($item2);

dd($pedido);

echo "<h3>Itens do pedido</h3>";

dd($pedido->getCarrinhoCompra()->getItems());

function dd($data) {
    return "<pre>".var_dump($data)."</pre>";
}

// print_r($carrinho1->exibitItems());
// echo "Valor total: ".$carrinho1->exibirValorTotal(); 

// $carrinho1->adicionarItem("Bicicleta", 750.20);
// $carrinho1->adicionarItem("Geladeira", 1950.15);
// $carrinho1->adicionarItem("Tapete", 350.18);

// print_r($carrinho1->exibitItems());
// echo "Valor total: ".$carrinho1->exibirValorTotal();
// echo "Status: ".$carrinho1->exibirStatus();

// $carrinho1->confirmarPedido();
// echo "Status: ".$carrinho1->exibirStatus();