<?php

//Classe é uma forma que conterá um objeto
//Em outras palavras é um projeto contendo todos os atributos e métodos que um objeto possuirá em sua instância
class PessoaFisica{

    //Aqui vão os métodos e atributos
    public $nome;
    //Atributos são características ou elementos da classe
    public $idade;

}

$pessoa = new PessoaFisica();
$pessoa->nome = 'Rodrigo';
$pessoa->idade = 18;

echo "Criada pessoa com atributos:
$pessoa->nome com $pessoa->idade anos.
";