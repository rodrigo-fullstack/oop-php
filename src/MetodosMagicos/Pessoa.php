<?php
namespace Rodrigo\OopPhp\MetodosMagicos;

use Exception;

abstract class Pessoa
{
    public static string $espirito;

    public function __construct(
        public string $nome,
    ) {}

    public function __destruct(){
        echo "Destruir Objeto Pessoa" . PHP_EOL;
    }

    protected function getNome(){
        return $this->nome;
    }

    public function __get($propriedade){
        if(property_exists($this, $propriedade)){
            return $this->$propriedade;
        }

        // NullObject
        return null;
    }

    public function __set($propriedade, $valor){
        $this->$propriedade = $valor;
    }

    public function __isset(string $propriedade){
        return property_exists($this, $propriedade);
    }

    public function __unset(string $propriedade){
        unset($this->$propriedade);
    }

    public function __call(string $method, array $parameters){
        if(!method_exists($this, $method)){
            return null;
        }

        // chama a função de acordo com o objeto, o método e os parâmetros.
        // consegue chamar métodos protegidos
        return call_user_func_array([$this, $method], $parameters); 
    }

    protected static function setEspirito(string $espirito){
        self::$espirito = $espirito;
    }

    public static function __callStatic(string $method, array $parameters){
        if(!method_exists(Pessoa::class, $method)){
            $mensagem = "Método de Nome $method não existe." . PHP_EOL;

            throw new Exception($mensagem);
        }

        return call_user_func_array([Pessoa::class, $method], $parameters);
    }

    
}
