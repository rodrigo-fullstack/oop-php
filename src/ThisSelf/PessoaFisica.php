<?php
declare(strict_types = 1);

namespace Rodrigo\OopPhp\ThisSelf;

class PessoaFisica{
    private static int $id = 0; //Importante para fazer contagem do objeto final
    private string $nome;
    private int $idade;
    private string $cpf;

    public function __construct(
        string $nome,
        int $idade,
        string $cpf){
        self::$id += 1;
        $this-> nome = $nome;
        $this-> idade = $idade;
        $this-> cpf = $cpf;
    }

    //Não funciona, gera erro de acesso de propriedade estática com método não estático
    public function exibirIdSemStatic(){
        echo 'Atributo Estático Id: ' . $this-> id . "\n";
    }

    public static function exibirIdComStatic(){
        echo 'Atributo Estático Id: ' . self::$id . "\n";
    }


    //Atribuição pode ser feita sem métodos estáticos
    public function setIdSemStatic(int $id){
        self::$id = $id;
        //$this-> id = $id; Não pode definir por meio de $this
    }

    public static function setIdComStatic(int $id){
        self::$id = $id;
        //$this-> id = $id; Não pode definir por meio de $this
    }

    public function getIdSemStatic(){
        return self::$id;
        //return $this-> id; Não se retorna o id com $this nesse caso, gera erro
    }

    public static function getIdComStatic(){
        return self::$id;
        //return $this-> id; Não se retorna o id com $this nesse caso, gera erro
    }

    public function exibirNome(){
        echo $this-> nome;
        //echo self::$nome; Não pode acessar atributo normal com self
    }

}