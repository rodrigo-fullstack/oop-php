<?php

namespace Rodrigo\OopPhp\ReflectionAPI\Core;

use ReflectionClass;

class Container{
    
    // 1. Instâncias de Dependências: propriedade para armazenar instâncias armazenadas anteriormente...
    protected array $dependencies = [];

    // 2. Instâncias de Dependências: método para recuperar as instâncias
    public function getInstance(string $className){
        return $this->dependencies[$className];
    }

    // 3. Instâncias de Dependências: método para definir uma instância anteriormente criada
    public function setInstance(string $className, callable $callback){
        $this->dependencies[$className] = call_user_func($callback);
    }

    public function __isset(string $data){
        $data = explode('@', $data);
        
        if(array_key_exists($data[1], $data[0])){
            return true;
        }

        return false;
    }

    // criando objeto dinamicamente
    public function buildObject(string $controllerName){
        $arguments = [];
        
        $reflectionClass = new ReflectionClass($controllerName);
        
        $constructorDepends = $reflectionClass
                                ->getConstructor()
                                ->getParameters();
        foreach($constructorDepends as $dependency){
            $typeName = $dependency->getType()->getName();

            // 4. Instâncias de Dependências: validar se já existe instância armazenada para evitar gasto de memória
            if(array_key_exists($typeName, $this->dependencies)){
                echo $typeName . ' já existe' . PHP_EOL;
                // se existe coloca no argumento a instância pelo nome da classe
                $arguments[] = $this->getInstance($typeName);
                continue;
            }
            // se não existe cria a classe atribuindo para arguments e seta nas instâncias já disponíveis na memória
            $class = new ($typeName);
            $arguments[] = $class;
            $this->setInstance($typeName, fn() => $class);
        }

        return $reflectionClass->newInstanceArgs($arguments);
    }   
}