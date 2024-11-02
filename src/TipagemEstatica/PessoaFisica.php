<?php

//Determinando que será tipagem estática, precisa ser a primeira linha
declare(strict_types = 1);

namespace Rodrigo\OopPhp\TipagemEstatica;

class PessoaFisica{
    public int $id;
    public string $nome;
    public int $idade;
    public string $CPF;

    //Aceita somente retorno de inteiros
    public function exibirId(): int{
        // return "Meu ID é $this-> id" Não é possível pois aceita somente inteiros;

        return $this-> id;
    }
}