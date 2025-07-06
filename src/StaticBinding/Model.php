<?php 

namespace Rodrigo\OopPhp\StaticBinding;

class Model{
    protected static string $name = 'Model';
    
    protected static function className():string 
    {
        return self::$name;
    };
}