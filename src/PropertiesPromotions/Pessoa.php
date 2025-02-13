<?php

namespace Rodrigo\OopPhp\PropertiesPromotions;

class Pessoa{
    public function __construct(
        public string $nome,
        public int $idade,
        public string $documento, 
    ){ }
}