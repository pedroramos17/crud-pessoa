<?php

require_once "model/pessoa.php";

class Conta {

    var $agencia;
    var string $codigo;
    var DateTime $dataDeCriacao;
    var Pessoa $titular;
    var string $senha;
    var float $saldo;
    var bool $cancelada;


    var float $quantia;

    public function retirar($quantia) {
        $this->saldo -= $quantia;
    }

    public function depositar($quantia) {
        $this->saldo += $quantia;
    }

    public function obterSaldo(): float {
        return $this->saldo;
    }
}