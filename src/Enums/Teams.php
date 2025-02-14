<?php

namespace Rodrigo\OopPhp\Enums;

// Backed Enum //

// deve ser tipado sem união (int ou string)
enum Teams: string{
    case Bahia = 'b';
    case Vitoria = 'v';
    case SaoPaulo = 'sp';
    case Santos = 'st';
}