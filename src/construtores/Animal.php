<?php
declare(strict_types=1);

namespace Rodrigo\OopPhp\Construtores;

class Animal{
    private int $id;
    private string $nome;
    private string $especie;
    private int $idade;

    /**
        * Método construtor da classe Animal
        *
        * @param mixed $nome
        * @param mixed $especie
        * @param mixed $idade
        */
    public function __construct($nome, $especie, $idade){
        $this-> id = 0;
        $this-> nome = $nome;
        $this-> especie = $especie;
        $this-> idade = $idade;
    }
}