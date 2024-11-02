<?php
require __DIR__.'/vendor/autoload.php';



// use Rodrigo\OopPhp\Classes\PessoaFisica;

// Usando namespace definido com nome diferente
// use Rodrigo\OopPhp\Classes\PessoaFisica as PesFis;

// use Rodrigo\OopPhp\Metodos\Banco;

//use Rodrigo\OopPhp\TipagemEstatica\PessoaFisica;

//Referenciando pelo autoload Src
use Rodrigo\OopPhp\GettersSetters\Carro;

//$pessoa = new \Rodrigo\OopPhp\Classes\PessoaFisica(); Instanciando Objeto com namespace

//$pessoa = new PesFis(); Instanciando objeto com nome personalizado


//Criando objeto (instanciando)
/*
$pessoa = new PessoaFisica();

Definindo atributos públicos
$pessoa -> nome = "Rodrigo";
$pessoa -> idade = 18;
$pessoa -> data_nasc = 110229;
$pessoa -> endereco = "Rua das Bromélias";
*/

//Testando Métodos
/*
$banco = new Banco();

$banco-> depositarDinheiro(100);
echo "Saldo: " . $banco-> capturarSaldo();

$banco-> sacarDinheiro(20);
echo "\nSaldo: " . $banco-> capturarSaldo();
*/

/*Testando Tipagem Estática
$pessoa = new PessoaFisica();

$pessoa-> id = 01;
$pessoa-> nome = 'Rodrigo';
$pessoa-> idade = 27;
//Gera conversão implícita
$pessoa-> idade = '27';
//$pessoa-> idade = 'Eu tenho 27 anos'; Tipagem impede de haver outros tipos como String
$pessoa-> CPF = "98765432100";

echo 'Id da pessoa: ' . $pessoa-> exibirId() . "\n";
*/

$carro = new Carro();

//Heredoc da linguagem PHP são strings com delimitadores ("aspas") identificados
//Para chamar métodos em strings utilize {$classe-> metodo()}
echo (<<<CARRO_IMPRESSÃO
Id do Carro: {$carro-> getId()}
Marca do Carro: {$carro-> getMarca()}
Modelo do Carro: {$carro-> getModelo()}

CARRO_IMPRESSÃO);

$carro->setId(1);
$carro->setMarca('Toyota');
$carro->setModelo('Camry');

//Melhor vardumper, do Symphony
//No dump, + significa público
//No dump, - significa privado
dump($carro);