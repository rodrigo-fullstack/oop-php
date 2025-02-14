<?php
namespace Rodrigo\OopPhp\MetodosMagicos;

abstract class Pessoa
{
    public function __construct(
        public string $nome,
    ) {}

    public function __destruct(){
        echo "Destruir Objeto Pessoa" . PHP_EOL;
    }

    public function getNome(){
        return $this->nome;
    }


}
