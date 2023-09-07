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

    public function retirar($quantia): void {
        $this->saldo -= $quantia;
    }

    public function depositar($quantia): void {
        $this->saldo += $quantia;
    }

    public function obterSaldo(): float {
        return $this->saldo;
    }

    
    function __construct(
        $agencia,
        $codigo,
        $dataDeCriacao,
        $titular,
        $senha,
        $saldo,
) {
    $this->agencia = $agencia;
    $this->codigo = $codigo;
    $this->dataDeCriacao = $dataDeCriacao;
    $this->titular = $titular;
    $this->senha = $senha;
    $this->saldo = $saldo;
    $this->cancelada = false;

    $this->depositar($saldo);
}
function __destruct() {
    echo "A conta {$this->codigo} de {$this->titular} foi finalizada com sucesso!";
}
}