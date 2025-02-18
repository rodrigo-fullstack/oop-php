<?php
namespace Rodrigo\OopPhp\ReflectionAPI;

class RoboHumanoideQuatroBracos extends RoboHumanoide
{
    public function __construct(
        $processor,
        $core,
        string $name = 'Robot',
        array $body = ['pernas' => [
            'perna1' => false,
            'perna2' => false
        ], 'tronco' => false, 'bracos' => [], 'cabeca' => false], array $data = []) {
        parent::__construct($processor, $core, $name, $body);
    }

}
