<?php

class Usuario {

    public $nome;
    protected $cpf;
    private $endereco;

    function __construct() {
        $this->preparaUsuario();
    }

    private function preparaUsuario() {
        $this->nome = "Leonardo";
        $this->cpf = "99999999999";
        $this->endereco = "Rua Fulano de Tal número e";
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getNome() {
        return $this->nome;
    }

    function getEndereco() {
        return $this->endereco;
    }
}

$usuario = new Usuario();

echo $usuario->getCpf(); // 99999999999
echo $usuario->getNome(); // Leonardo
echo $usuario->getEndereco(); // Rua Fulano de Tal número 
?> 