<?php

    class Animal{
        private $id;
        private $nome;
        private $especie;
        private $idade;

        /**
         * Método construtor da classe Animal
         * 
         * @param mixed $nome
         * @param mixed $especie
         * @param mixed $idade
         */
        public function __construct(){
            $this->nome = "";
            $this->especie = "";
            $this->idade = 0;
        }

        
    }

    $animal = new Animal();

    //Decompõe as estruturas do objeto e exibe todos os seus elementos.
    var_dump($animal);