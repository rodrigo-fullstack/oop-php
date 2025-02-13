<?php

namespace Rodrigo\OopPhp\InstanceOf;

use stdClass;

interface PessoaInterface{
    public function falar();

    public function tocar(PessoaInterface|stdClass $objeto);

    public function cheirar(PessoaInterface|stdClass $objeto);

    public function olhar(PessoaInterface|stdClass $objeto);
    
    public function sentirGosto(stdClass $objeto);


}