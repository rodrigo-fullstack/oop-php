<?php

namespace Rodrigo\OopPhp\ReflectionAPI\Core;

use ReflectionClass;

class Container{
    
    // criando objeto dinamicamente
    public function buildObject(string $className){
        // 1. cria variável arguments
        $arguments = [];
        
        // 2. instancia reflection class do controller
        $reflectionClass = new ReflectionClass($className);
        // 3. recebe parâmetros do construtor
        $constructorDepends = $reflectionClass
                                ->getConstructor()
                                ->getParameters();

        foreach($constructorDepends as $dependency){
            $typeName = $dependency->getType()->getName();

            $arguments[] = new ($typeName);
        }

        return $reflectionClass->newInstanceArgs($arguments);
    }   
}