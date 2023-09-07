<?php

include_once 'model/Pessoa.php';
include_once 'Conta.php';

$carlos = new Pessoa(10, "Carlos de Almeida", 1.85, 25, "12837921361", "Ensino Médio", 650.00);

echo "Manipulando o objeto {$carlos->nome}.<br>";

echo "<br>";

echo "{$carlos->nome} é formado em: {$carlos->escolaridade}.<br>";

$carlos->formar("Técnico em Desenvolvimento de Sistemas.");

echo "Carlos é formado agora {$carlos->escolaridade}.<br>";

echo "A idade de Carlos é {$carlos->idade}.<br>";

$carlos->envelhecer(1);

echo "Carlos agora tem {$carlos->idade} de idade.<br>";

$carlos_conta = new Conta(6671, "CC:11231243" , "2384092", $carlos, 1233, 23);

echo "/n";

echo "Manipulando a conta de {$carlos_conta->titular->nome}. /n";

echo "O saldo atual é {$carlos_conta->obterSaldo()}. /n";

$carlos_conta->depositar(20);

echo "O saldo agora é {$carlos_conta->obterSaldo()}. /n";

$carlos_conta->retirar(10);

echo "O novo saldo é {$carlos_conta->obterSaldo()}.";

