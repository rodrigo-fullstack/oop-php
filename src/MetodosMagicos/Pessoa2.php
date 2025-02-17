<?php

namespace Rodrigo\OopPhp\MetodosMagicos;

abstract class Pessoa2{
    protected array $propriedades = [];

    public function __construct(
        array $propriedades,
    ){
        $this->propriedades = $propriedades;
    }

    public function __get($propriedade){
        if(!array_key_exists($propriedade, $this->propriedades)){
            return null;

        }

        return $this->propriedades[$propriedade];
    }

    public function __set($propriedade, $valor){
        $this->propriedades[$propriedade] = $valor;
    }

    public function __isset($propriedade){
        if(!isset($this->propriedades[$propriedade])){
            return null;
        }

        return true;
    }

    public function __unset($propriedade){
        unset($this->propriedades[$propriedade]);
    }

    public function __tostring(){
        $string = '[' . PHP_EOL;
        $i = 0;
        foreach($this->propriedades as $chave => $valor){
            $string .= "\t" . $chave . ' => ' .  $valor;
            if($i < count($this->propriedades) - 1){
                $string .= ',';
            }
            $string .= PHP_EOL;
            
            $i++;
        }

        return $string . ']';
    }

    public function toJson(){
        return json_encode($this->propriedades, JSON_PRETTY_PRINT);
    }
}