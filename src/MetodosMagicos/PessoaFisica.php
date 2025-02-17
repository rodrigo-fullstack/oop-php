<?php

namespace Rodrigo\OopPhp\MetodosMagicos;

class PessoaFisica extends Pessoa{
    // --------------------
    // Métodos Mágicos - __construct
    // --------------------

    // inicia a classe
    public function __construct(
        string $nome = '',
        // property promotions: 
        // public int $idade = 0,
        // public string $cpf = ''
        ){
            // executa as instruções do construtor da classe pai
            parent::__construct($nome);

    }

    // --------------------
    // Métodos Mágicos - __destruct
    // --------------------

    // destrói o objeto para evitar gasto de memória
    public function __destruct(){
        parent::__destruct();
        echo "Destruir Objeto Pessoa Fisica"  . PHP_EOL;
    }

    
    // --------------------
    // Métodos Mágicos - __toString
    // --------------------
    public function __toString()
    {
        $string = '';

        $i = 0;
        $atributos = get_object_vars($this);
        foreach($atributos as $atributo => $valor){
            if(empty($valor)){
                $valor = 'Nulo';
            }

            if(is_array($valor)){
                $valor = json_encode($valor, JSON_PRETTY_PRINT);
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