<?php

namespace Rodrigo\OopPhp\DTO;

use stdClass;

class PessoaDTO{
    public function __construct(
        public ?stdClass $propriedades,
        private string $nome = '',
        private int $idade = 0,
        private string $documento = '',

    )
    {
        $this->nome = $this->propriedades->nome;
        $this->idade = $this->propriedades->idade;
        $this->documento = $this->propriedades->documento;
        $this->propriedades = null;
    }

    public function __get($atributo){
        return $this->$atributo;
    }

    
}