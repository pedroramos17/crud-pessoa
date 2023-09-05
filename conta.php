<?php
require_once "pessoa.php";
class Conta {

    new Pessoa();

    int $agencia;
    string $codigo;
    $dataDeCriacao;
    $titular;
    string $senha;
    float $saldo;
    boolean $cancelada;
}