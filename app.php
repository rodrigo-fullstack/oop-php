<?php
require __DIR__.'/vendor/autoload.php';

//Usando namespace definido com nome diferente
//use Rodrigo\OopPhp\Classes\PessoaFisica as PesFis;
use Rodrigo\OopPhp\Classes\PessoaFisica;

//$pessoa = new \Rodrigo\OopPhp\Classes\PessoaFisica(); Instanciando Objeto com namespace

//$pessoa = new PesFis(); Instanciando objeto com nome personalizado


//Criando objeto (instanciando)
$pessoa = new PessoaFisica();

//Definindo atributos públicos
$pessoa -> nome = "Rodrigo";
$pessoa -> idade = 18;
$pessoa -> data_nasc = 110229;
$pessoa -> endereco = "Rua das Bromélias";

//Melhor vardumper, do Symphony
dump($pessoa);
//No dump, + significa público
//No dump, - significa privado