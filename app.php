<?php
require __DIR__.'/vendor/autoload.php';

// Usando namespace definido com nome diferente
// use Rodrigo\OopPhp\Classes\PessoaFisica as PesFis;
// use Rodrigo\OopPhp\Classes\PessoaFisica;

use Rodrigo\OopPhp\Metodos\Banco;

//$pessoa = new \Rodrigo\OopPhp\Classes\PessoaFisica(); Instanciando Objeto com namespace

//$pessoa = new PesFis(); Instanciando objeto com nome personalizado


/*
Criando objeto (instanciando)
$pessoa = new PessoaFisica();

Definindo atributos públicos
$pessoa -> nome = "Rodrigo";
$pessoa -> idade = 18;
$pessoa -> data_nasc = 110229;
$pessoa -> endereco = "Rua das Bromélias";
*/

//Testando Métodos
$banco = new Banco();

$banco-> depositarDinheiro(100);
echo "Saldo: " . $banco-> capturarSaldo();

$banco-> sacarDinheiro(20);
echo "\nSaldo: " . $banco-> capturarSaldo();


//Melhor vardumper, do Symphony
//No dump, + significa público
//No dump, - significa privado

//dump($pessoa);