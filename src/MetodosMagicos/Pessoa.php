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

    // --------------------
    // Métodos Mágicos - __get
    // --------------------
    // recupera dados de propriedades inacessíveis, indefinidas ou privadas e protegidas
    public function __get($propriedade){
        // regras de negócio do __get

        // se existir retorna a propriedade
        if(property_exists($this, $propriedade)){
            return $this->$propriedade;
        }

        // se não retorna NullObject
        return null;
    }

    // --------------------
    // Métodos Mágicos - __set
    // --------------------
    // define propriedades de instância a partir da declaração do objeto->propriedade
    public function __set($propriedade, $valor){
        // regras de negócio
        
        // define a propriedade
        $this->$propriedade = $valor;
    }

    // Não pode ser estático: 
    // public static function __set($propriedade, $valor){
    // 
    // }

    // --------------------
    // Métodos Mágicos - __isset
    // --------------------
    // retorna se a propriedade existe ou não
    public function __isset(string $propriedade){
        return property_exists($this, $propriedade);
    }

    // --------------------
    // Métodos Mágicos - __unset
    // --------------------
    // apaga a referência da memória da propriedade definida
    public function __unset(string $propriedade){
        unset($this->$propriedade);
    }

    // --------------------
    // Métodos Mágicos - __get
    // --------------------
    // chama métodos de forma dinâmica, podendo acessar novos métodos, métodos inacessíveis ou protegidos e privados
    public function __call(string $method, array $parameters){
        // regras de negócio

        // se o método não existe retorna nulo
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

    // --------------------
    // Métodos Mágicos - __callStatic
    // --------------------
    // chama métodos estáticos dinamicamente
    public static function __callStatic(string $method, array $parameters){
        // regras de negócio
        
        // se o método não existe, retorna uma exceção
        if(!method_exists(Pessoa::class, $method)){
            $mensagem = "Método de Nome $method não existe." . PHP_EOL;

            throw new Exception($mensagem);
        }

        // chama o método pela função passando o nome da classe, o método e os parâmetros
        return call_user_func_array([Pessoa::class, $method], $parameters);
    }

    public function __invoke(string $propriedade, mixed $valor){
        $this->$propriedade = $valor;
    }
}
