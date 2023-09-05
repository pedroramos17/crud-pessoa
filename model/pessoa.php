<?php

class Pessoa {

    var $codigo;
    var $nome;
    var $idade;
    var $altura;
    var $escolaridade;
    var $salario;
    
    function crescer($centimetros) {
        if($centimetros > 0) {
            $this->altura += $centimetros;
        }
    }

    function formar($certificacao) {
        $this->escolaridade = $certificacao;
    }

    function envelhecer($anos) {
        if($anos > 0) {
            $this->idade += $anos;
        }
    }
}