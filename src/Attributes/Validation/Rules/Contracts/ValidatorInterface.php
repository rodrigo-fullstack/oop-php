<?php

namespace Rodrigo\OopPhp\Attributes\Validation\Rules\Contracts;

// 5. criar ValidatorInterface
interface ValidatorInterface{
    public function validate(mixed $value): bool;
}