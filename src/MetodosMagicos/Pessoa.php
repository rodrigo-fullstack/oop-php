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

    public function __get($propriedade){
        if(property_exists($this, $propriedade)){
            return $this->$propriedade;
        }

        // NullObject
        return null;
    }

    public function __set($propriedade, $valor){
        $this->$propriedade = $valor;
    }

    public function __isset(string $propriedade){
        return property_exists($this, $propriedade);
    }

    public function __unset(string $propriedade){
        unset($this->$propriedade);
    }

}
