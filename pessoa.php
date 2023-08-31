<?php

class Pessoa {
    $codigo;
    $nome;
    $idade;
    $altura;
    $escolaridade;
    $salario;
    
    function crescer($centimetros) {
        if($centimetros > 0) {
            $this.altura += $centimetros;
        }
    }

    function formar($certificacao) {
        $this.escolaridade = $certificacao;
    }

    function envelhecer($anos) {
        if($anos > 0) {
            $this.idade += $anos;
        }
    }
}