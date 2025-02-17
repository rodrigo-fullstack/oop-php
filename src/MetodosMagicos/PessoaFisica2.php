<?php
namespace Rodrigo\OopPhp\MetodosMagicos;

class PessoaFisica2 extends Pessoa2
{
    public function __construct(
        string $nome = '',
        string $cpf = '',
        int $idade = 0,
    ) {
        parent::__construct([
            'nome' => $nome,
            'cpf' =>  $cpf,
            'idade' => $idade
        ]);
    }
}
