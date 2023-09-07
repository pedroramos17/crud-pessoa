<?php

include_once 'model/Pessoa.php';
include_once 'Conta.php';

$carlos = new Pessoa(10, "Carlos de Almeida", 1.85, 25, "12837921361", "Ensino Médio", 650.00);

echo "Manipulando o objeto {$carlos->nome} <br>";

echo "<br>";

echo "{$carlos->nome} é formado em: {$carlos->escolaridade} <br>";

$carlos->formar("Técnico em Desenvolvimento de Sistemas");

echo "Carlos é formado agora {$carlos->escolaridade} <br>";

echo "A idade de Carlos é {$carlos->idade} <br>";

$carlos->envelhecer(1);

echo "Carlos agora tem {$carlos->idade} de idade <br>";