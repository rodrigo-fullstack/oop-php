<?php

class Animal{
    
    private $id;
    private $nome;
    private $especie;
    private $idade;
    
    public function __construct($nome = null, $especie = null, $idade = 0){
        $verifica_atributos = $nome != null && $especie != null && $idade != 0;
        
        //Verifica se possui todos os atributos
        if($verifica_atributos){
            $this->nome = $nome;
            $this->especie = $especie;
            $this->idade = $idade;
        } 
        else{
            $this->nome = "";
            $this->especie = "";
            $this->idade = 0;
        }
    }
}
