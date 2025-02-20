<?php

namespace Rodrigo\OopPhp\Attributes\Validation\Validators;

use Rodrigo\OopPhp\Attributes\Validation\Rules\Contracts\ValidatorInterface;

// 7. criar Validator da regra desejada
class RequiredValidator implements ValidatorInterface{
    // 8. implementar o método da Interface
    public function validate(mixed $value): bool{
        return !empty($value);
    }
}
