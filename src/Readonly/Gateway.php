<?php
namespace Rodrigo\OopPhp\Readonly;

readonly class Gateway
{
    public function __construct(
        public string $token,
        public string $baseUrl,
    ) {}
}
