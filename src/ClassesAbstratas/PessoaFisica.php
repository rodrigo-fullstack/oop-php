<?php
declare(strict_types=1);

namespace Rodrigo\OopPhp\ClassesAbstratas;

//Possui métodos e atributos herdados de pessoa
class PessoaFisica extends Pessoa{
    //Adiciona-se esses atributos a PessoaFisica
    private int $idade;
    private string $genero;
    private string $cpf;

    //Adiciona-se esses métodos a PessoaFisica
    public function getIdade(): int{
        return $this-> idade;
    }

    public function getGenero(): string{
        return $this-> genero;
    }

    public function getCPF(): string{
        return $this-> cpf;
    }

    public function setIdade(int $idade){
        $this-> idade = $idade;
    }

    public function setGenero(string $genero){
        $this-> genero = $genero;
    }

    public function setCPF(string $cpf){
        $this-> cpf = $cpf;
    }

}