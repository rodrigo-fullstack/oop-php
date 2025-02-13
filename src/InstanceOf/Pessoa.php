<?php

namespace Rodrigo\OopPhp\InstanceOf;

use stdClass;

class Pessoa implements PessoaInterface{
    public string $nome;
    
    public function falar(){
        echo "Falando...";
    }
    
    public function tocar(PessoaInterface|stdClass $objeto){
        if($objeto instanceof PessoaInterface){
            echo "Tocando na pessoa $objeto->nome"; return;
        }

        echo "Tocando no objeto $objeto->nome";

    }

    public function cheirar(PessoaInterface|stdClass $objeto){
        if($objeto instanceof PessoaInterface){
            echo "Cheirando pessoa $objeto->nome"; return;
        }

        echo "Cheirando objeto $objeto->nome";
    }

    public function olhar(PessoaInterface|stdClass $objeto){
        if($objeto instanceof PessoaInterface){
            echo "Olhando pessoa $objeto->nome"; return;
        }

        echo "Olhando objeto $objeto->nome";
    }
    
    public function sentirGosto(stdClass $objeto){
        echo "Sentindo gosto de $objeto->nome";       
    }
}