<?php
namespace Rodrigo\OopPhp\ReflectionAPI;

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
        echo "Olá, eu sou o robô $this->name. Como posso ajudar?";
    }

    

    public function caminhar(estadoCaminhar $style): void{
        $this->processor = 'Caminhar' . $style->name;
        $this->core = 'Energizar' . $style->name;
        $this->body['pernas'] = 'Andando' . $style->name;

        echo "Estou andando";
        dump($this->processor, $this->core, $this->body['pernas']);
    }
}

// PureCaseEnum
enum estadoCaminhar {
    case Rapido;
    case Lento;
    case Medio;
}