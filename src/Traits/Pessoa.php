<?php

namespace Rodrigo\OopPhp\Traits;

use DateTime;

class Pessoa{
    use DadosBancariosPessoa;

    public function __construct(
        public string $name, 
        public DateTime $birthDate,
        public string $cpf,
        string $agencia,
        string $conta
        )
    {
        $this->agencia = $agencia;
        $this->conta = $conta;
    }
}

