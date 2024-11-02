<?php
require __DIR__.'/vendor/autoload.php';

//Usando namespace definido com nome diferente
use Rodrigo\OopPhp\Classes\PessoaFisica as PesFis;

//$pessoa = new \Rodrigo\OopPhp\Classes\PessoaFisica(); Instanciando Objeto com namespace

$pessoa = new PesFis();
$pessoa->nome = "Rodrigo";
$pessoa->idade = 18;

dump($pessoa);
//No dump, + significa público
//No dump, - significa privado