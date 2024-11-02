<?php

declare(strict_types=1);

namespace Rodrigo\OopPhp\GettersSetters;

class Carro{
    //Inicializando para evitar erro de inicialização
    private int $id = 0;
    private string $marca = '';
    private string $modelo = '';

    public function getId(): int{
        return $this-> id;

    }

    public function getMarca(): string{
        return $this-> marca;

    }

    public function getModelo(): string{
        return $this-> modelo;

    }

    public function setId($id): void{
        $this-> id = $id;

    }

    public function setMarca($marca): void{
        $this-> marca = $marca;

    }

    public function setModelo($modelo): void{
        $this-> modelo = $modelo;

    }
}