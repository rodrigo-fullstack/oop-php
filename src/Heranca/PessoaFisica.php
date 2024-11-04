<?php
declare(strict_types=1);

namespace Rodrigo\OopPhp\Heranca;

class PessoaFisica{
    private int $id;
    private string $nome;
    private int $idade;
    private string $genero;

    public function getId(): int{
        return $this-> id;
    }

    public function getNome(): string{
        return $this-> nome;
    }

    public function getIdade(): int{
        return $this-> idade;
    }

    public function getGenero(): string{
        return $this-> genero;
    }

    public function setId(int $id){
        $this-> id = $id;
    }

    public function setNome(string $nome){
        $this-> nome = $nome;
    }

    public function setIdade(int $idade){
        $this-> idade = $idade;
    }

    public function setGenero(string $genero){
        $this-> genero = $genero;
    }

}