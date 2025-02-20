<?php

namespace Rodrigo\OopPhp\Attributes\Validation\Validators;

use Rodrigo\OopPhp\Attributes\Validation\Rules\Contracts\LengthValidatorInterface;

class LengthValidator implements LengthValidatorInterface{
    public function validate(mixed $value, int $min, int $max): bool{
        
        $chars = mb_strlen($value);
        return $chars >= $min || $chars <= $max;
    }
}
