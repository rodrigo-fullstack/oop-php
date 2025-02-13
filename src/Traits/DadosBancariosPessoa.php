<?php

namespace Rodrigo\OopPhp\Traits;

trait DadosBancariosPessoa{
    public string $agencia;
    public string $conta;

    public function getAgencia(){
        return $this->agencia;
    }

    public function getConta(){
        return $this->conta;
    }
}