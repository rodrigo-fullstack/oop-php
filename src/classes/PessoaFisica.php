<?php

//Namespaces são nomes que organizam as classes, interfaces, funções em diretórios
namespace Rodrigo\OopPhp\Classes;

//Classe é uma forma que conterá um objeto
//Em outras palavras é um projeto contendo todos os atributos e métodos que um objeto possuirá em sua instância
class PessoaFisica{

    //Aqui vão os métodos e atributos
    public $nome;
    //Atributos são características ou elementos da classe
    public $idade;
    public $data_nasc;
    public $endereco;
}

//Código para teste das instâncias

// $pessoa = new PessoaFisica();
// $pessoa->nome = 'Rodrigo';
// $pessoa->idade = 18;

// echo "Criada pessoa com atributos:
// $pessoa->nome com $pessoa->idade anos.
// ";

//var_dump($pessoa);  Realiza a exibição da estrutura da classe

//echo $pessoa; Gera fatal error que não consegue converter para string