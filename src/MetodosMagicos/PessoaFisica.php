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
    
    public function __toString()
    {
        $string = '';

        $i = 0;
        $atributos = get_object_vars($this);
        foreach($atributos as $atributo => $valor){
            if(empty($valor)){
                $valor = 'Nulo';
            }
            $string .= $atributo . ': ' . $valor;    
            if($i < count($atributos) - 1){
                $string .= ',';
            }
            $string .= PHP_EOL;
            $i++;
        }

        return $string . PHP_EOL;
    }
}