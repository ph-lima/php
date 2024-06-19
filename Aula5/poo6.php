<?php

class Conta {

    public $saldo = 0;

    function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
        } else {
            echo "Erro: Valor inválido para depósito.";
        }
    }

    function sacar($valor) {
        if ($valor > 0 && $this->saldo >= $valor) {
            $this->saldo -= $valor;
        } else {
            echo "Erro: Saldo insuficiente.";
        }
    }
}

class ContaCorrente extends Conta {

    function transferir($contaDestino, $valor) {
        if ($valor > 0 && $this->saldo >= $valor) {
            $this->saldo -= $valor;
            $contaDestino->saldo += $valor;
            echo "Transferência realizada com sucesso.";
        } else {
            echo "Erro: Saldo insuficiente ou valor inválido.";
        }
    }
}

$novaConta1 = new ContaCorrente();
$novaConta2 = new ContaCorrente();

$novaConta1->transferir($novaConta2, 500);
$novaConta2->depositar(500);

echo "Saldo da Conta 1: " . $novaConta1->saldo . PHP_EOL;
echo "Saldo da Conta 2: " . $novaConta2->saldo . PHP_EOL;