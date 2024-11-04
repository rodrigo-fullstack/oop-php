<?php
require __DIR__.'/vendor/autoload.php';



// use Rodrigo\OopPhp\Classes\PessoaFisica;

// Usando namespace definido com nome diferente
// use Rodrigo\OopPhp\Classes\PessoaFisica as PesFis;

// use Rodrigo\OopPhp\Metodos\Banco;

//use Rodrigo\OopPhp\TipagemEstatica\PessoaFisica;

//use Rodrigo\OopPhp\GettersSetters\Carro;

// use Rodrigo\OopPhp\Construtores\Animal;

// use Rodrigo\OopPhp\ThisSelf\PessoaFisica;


use Rodrigo\OopPhp\Heranca\PessoaFisica;
use Rodrigo\OopPhp\Heranca\PessoaJuridica;


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

//$carro = new Carro();

//Heredoc da linguagem PHP são strings com delimitadores ("aspas") identificados
//Para chamar métodos em strings utilize {$classe-> metodo()}

/* Testando Getters e Setters
echo (<<<CARRO_IMPRESSÃO
Id do Carro: {$carro-> getId()}
Marca do Carro: {$carro-> getMarca()}
Modelo do Carro: {$carro-> getModelo()}

CARRO_IMPRESSÃO);

$carro-> id = 1;
$carro-> setId(1);
$carro-> setMarca('Toyota');
$carro-> setModelo('Camry');
*/

/*Testando Construtores
$nome_animal = "Josemias";
$especie_animal = "Cachorro";
$idade_animal = 5;

$animal = new Animal(
    $nome_animal,
    $especie_animal,
    $idade_animal
);*/

/* Testando métodos estáticos com $this e self::$atributo;

//Construtor aumenta em 1 o ID
$pessoa = new PessoaFisica(
    'Rodrigo',
    22,
    '9321854632'
);

// PessoaFisica::exibirId(); Pode chamar métodos estáticos sem ser instanciado
// PessoaFisica-> exibirNome(); Não pode chamar métodos

//Exibindo com método estático
PessoaFisica::exibirIdComStatic();
//$PessoaFisica-> exibirIdSemStatic(); Variável indefinida
//PessoaFisica-> exibirIdSemStatic(); Não aceita objeto null

// Acessando atributo estático no objeto instanciado
// $pessoa-> exibirIdSemStatic(); Não consegue acessar por não ser método estático - obs: acesso feito com $this

$pessoa::exibirIdComStatic();

// Mudando através do set com self sem ser método estático
// $pessoa-> setIdSemStatic(1);

// Mudando através do set com self com método estático
// ID mudado para 2
$pessoa::setIdComStatic(2);

// Ambos acima geram o mesmo resultado

// Muda também na classe
PessoaFisica::exibirIdComStatic();
$pessoa::exibirIdComStatic();
$pessoa-> exibirNome(); //Método normal

//Testando Get com Métodos Estáticos

// Funciona normalmente
echo "\nAtrib Static com Get sem Static: {$pessoa-> getIdSemStatic()}";

//Funciona normalmente
echo "\nAtrib Static com Get com Static: {$pessoa::getIdComStatic()} \n";

//ID aumentou em 1
$pessoa02 = new PessoaFisica(
    'Gabriela',
    21,
    '03219432100'
     );

//Construtor aumenta em 1 o ID para todos os objetos:
$pessoa02::exibirIdComStatic();
*/

/*Testando Herança Simples

*/

//Objeto pessoa de PessoaFisica
$pessoa = new PessoaFisica();
$pessoa-> setId(1);
$pessoa-> setNome('Rodrigo');
$pessoa-> setIdade(18);
$pessoa-> setGenero('M');

$empresa = new PessoaJuridica();
$empresa-> setId(1);
$empresa-> setNome('Rodrigo');
$empresa-> setIdade(5);
$empresa-> setGenero('I');

//Empresa herda características de PessoaFisica, portanto é também uma instância
if($empresa instanceof PessoaFisica){
    echo 'Objeto empresa é instância de PessoaFisica';
}
else{
    echo 'Objeto empresa não é instância de PessoaFisica';
}


//Melhor vardumper, do Symphony
//No dump, + significa público
//No dump, - significa privado
dump($pessoa);
dump($empresa);