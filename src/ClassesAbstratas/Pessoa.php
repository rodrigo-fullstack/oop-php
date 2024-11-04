<?php
declare(strict_types=1);

namespace Rodrigo\OopPhp\ClassesAbstratas;

abstract class Pessoa{
    private int $id;
    private string $nome;

    //Método estático para verificação de instância
    public static function instancia($objeto){
        //Verifica se o objeto é instância da classe Pessoa
        //Use self para se referenciar ao objeto no método estático
        if($objeto instanceof self){
            echo <<<EOL
            {$objeto-> getNome()} é instância de Pessoa

            EOL;
            return true;
        }
            echo <<<EOL
            {$objeto-> getNome()} não é instância de Pessoa

            EOL;
            return false;
    }

    public function getId(): int{
        return $this-> id;
    }

    public function getNome(): string{
        return $this-> nome;
    }

    public function setId(int $id){
        $this-> id = $id;
    }

    public function setNome(string $nome){
        $this-> nome = $nome;
    }
}