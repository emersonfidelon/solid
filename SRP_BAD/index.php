<?php
require __DIR__.'/vendor/autoload.php';

use App\CarrinhoCompra;

$carrinho1 = new CarrinhoCompra();

echo "<h3>Sem SRP</h3>";

print_r($carrinho1->exibitItems());
echo "Valor total: ".$carrinho1->exibirValorTotal(); 

$carrinho1->adicionarItem("Bicicleta", 750.20);
$carrinho1->adicionarItem("Geladeira", 1950.15);
$carrinho1->adicionarItem("Tapete", 350.18);

print_r($carrinho1->exibitItems());
echo "Valor total: ".$carrinho1->exibirValorTotal();
echo "Status: ".$carrinho1->exibirStatus();

$carrinho1->confirmarPedido();
echo "Status: ".$carrinho1->exibirStatus();