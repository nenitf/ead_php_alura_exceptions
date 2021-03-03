<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

$contaCorrente = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('cidade', 'bairro', 'rua', 'numero')
    )
);

try {
    $contaCorrente->deposita(-100);
} catch (InvalidArgumentException $exception) {
    echo "Valor a depositar precisa ser positivo, seu ráquer perigoso";
}
