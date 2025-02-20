<?php 

namespace Rodrigo\OopPhp\Attributes\Validation\Rules\Contracts;

interface LengthValidatorInterface{
    public function validate(mixed $value, int $min, int $max): bool;
}