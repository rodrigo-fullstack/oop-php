<?php

namespace Rodrigo\OopPhp\Enums;

// Pure Case Enum //

enum EstadoPedido{
    // Enums que possuem somente objetos singletons sem valores atribuídos.
    case EsperaDePagamento;
    case NaDistribuidora;
    case EmViagem;
    case Entregue;
}