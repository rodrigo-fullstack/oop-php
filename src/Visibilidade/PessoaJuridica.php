<?php
declare(strict_types=1);

namespace Rodrigo\OopPhp\Visibilidade;

//Possui métodos e atributos da classe Pessoa
class PessoaJuridica extends Pessoa{
    //Adiciona-se esse atributo
    private string $cnpj;

    //Adiciona-se esses métodos

    //Construtor vindo da classe Pessoa
    public function __construct(
        int $id,
        string $nome,
        string $cnpj
    ){
        //Atribui por meio do construtor da classe Pessoa
        parent::__construct($id, $nome);
        $this-> cnpj = $cnpj;
    }

    public function getDocument(): string{
        return $this-> cnpj;

    }
    public function setDocument(string $cnpj){
        $this-> cnpj = $cnpj;
    }



}