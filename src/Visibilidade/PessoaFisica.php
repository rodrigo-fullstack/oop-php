<?php
declare(strict_types=1);

namespace Rodrigo\OopPhp\Visibilidade;

//Possui métodos e atributos herdados de pessoa
class PessoaFisica extends Pessoa{
    //Adiciona-se esses atributos a PessoaFisica
    private int $idade;
    private string $genero;
    private string $cpf;

    //Parâmetros id e nome atribuídos por meio do __construct de Pessoa
    public function __construct(
        int $id,
        string $nome,
        int $idade,
        string $genero,
        string $cpf
    ){
        //Parent aplica o método da classe pai
        parent::__construct($id, $nome);
        //Continuidade para a extensão PessoaFisica
        $this-> idade = $idade;
        $this-> genero = $genero;
        $this-> cpf = $cpf;

    }

    //Adiciona-se esses métodos a PessoaFisica
    public function getIdade(): int{
        return $this-> idade;
    }

    public function getGenero(): string{
        return $this-> genero;
    }

    //Método concreto substituído do método abstrato de pessoa
    public function getDocument(): string{
        return $this-> cpf;
    }

    public function setIdade(int $idade){
        $this-> idade = $idade;
    }

    public function setGenero(string $genero){
        $this-> genero = $genero;
    }

    //Método concreto substituído do método abstrato de pessoa
    public function setDocument(string $cpf){
        $this-> cpf = $cpf;

    }

}