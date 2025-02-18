<?php
namespace Rodrigo\OopPhp\ReflectionAPI;

/**
 * Classe de um Robo para ser instanciada em um jogo.
 */
class Robo
{
    public function __construct(
        private $processor,
        private $core,
        public string $name = 'Robot',
        public array $body = [
            'pernas' => [],
            'tronco' => false,
            'bracos' => [],
            'cabeca' => false,
        ],
        protected array $data = []
    ) {
        echo "Olá, eu sou o robô $this->name. Como posso ajudar?" . PHP_EOL;
    }

    

    public function walk(estadoCaminhar $style): void{
        $this->processor = 'Caminhar' . $style->name;
        $this->core = 'Energizar' . $style->name;
        $this->body['pernas'] = 'Andando' . $style->name;

        echo "Estou andando";
        dump($this->processor, $this->core, $this->body['pernas']);
    }

    protected function fly(estadoVoar $style){
        $this->processor = 'Voando ' . $style->name;
        $this->core = 'Energizar para Voar ' . $style->name;
        $this->body['pernas'] = 'Pernas a Jato para voar ' . $style->name;
        echo "Estou voando $style->name..." . PHP_EOL;
    }

    /**
     * Define os metadados do Robô
     * @param mixed $data
     * @return void
     */
    private function setData($data){
        $this->data = $data;
    }
}

// PureCaseEnum
enum estadoCaminhar {
    case Rapido;
    case Lento;
    case Medio;
}

enum estadoVoar {
    case Rapido;
    case Lento;
    case Medio;
}