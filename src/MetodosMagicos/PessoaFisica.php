<?php

namespace Rodrigo\OopPhp\MetodosMagicos;

class PessoaFisica extends Pessoa{
    public function __construct(
        string $nome = '',
        // public int $idade = 0,
        // public string $cpf = ''
        ){
            parent::__construct($nome);

    }

    public function __destruct(){
        parent::__destruct();
        echo "Destruir Objeto Pessoa Fisica"  . PHP_EOL;
    }
    
}