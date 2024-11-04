<?php

namespace Rodrigo\OopPhp\Metodos;

class Banco{
    //Atributos privados não são acessíveis diretamente com a seta -> para nome_objeto -> atributo;
    private $saldo;

    //Acessamos com métodos públicos
    public function capturarSaldo(){
        return $this -> saldo;
    }

    //Retira do saldo a quantia especificada
    public function sacarDinheiro($dinheiro) {

        //Verificar se a quantia digitada é menor que o salário
        if($dinheiro <= $this -> saldo){
            $this -> saldo -= $dinheiro;
            return true;
        }
        //Verificar se a quantia digitada é maior que o salário
        return false;
    }

    //Adiciona ao saldo a quantia necessitada
    public function depositarDinheiro($dinheiro){
        $this -> saldo += $dinheiro;
        return true;
    }

}