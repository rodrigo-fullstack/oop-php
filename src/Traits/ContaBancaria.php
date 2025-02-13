<?php

namespace Rodrigo\OopPhp\Traits;

class ContaBancaria{
    public function __construct(
        public Pessoa $pessoa,
        public int $saldo,
        )
    {
        
    }
}

