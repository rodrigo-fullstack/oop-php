<?php

class Pessoa{
    public $nome;
    public $idade;

}

$pessoa = new Pessoa();
$pessoa->nome = 'Rodrigo';
$pessoa->idade = 18;

echo "Criada pessoa com atributos: 
$pessoa->nome com $pessoa->idade anos.
";