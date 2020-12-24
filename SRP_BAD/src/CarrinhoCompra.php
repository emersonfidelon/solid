<?php

namespace App;

class CarrinhoCompra {
    // atributos
    private $items;
    private $status;
    private $valorTotal;

    public function __construct() {
        $this->items = array();
        $this->status = 'aberto';
        $this->valorTotal = 0;
    }

    public function exibitItems() {
        return $this->items;
    }

    public function adicionarItem(string $item, float $valor) {
        array_push($this->items, ["item" => $item, "valor" => $valor]);
        $this->valorTotal += $valor;
        return true;
    }

    public function exibirValorTotal() {
        return $this->valorTotal;
    }

    public function exibirStatus() {
        return $this->status;
    }

    public function confirmarPedido() {
        if ($this->validarCarrinho()) {
            $this->status = 'Confirmado';
            $this->enviarEmailConfirmacao();
        }
    }

    public function enviarEmailConfirmacao() {
        echo '<br/>... envia email de confirmação ...<br/>';
    }

    public function validarCarrinho() {
        return count($this->items) > 0;
    }
}