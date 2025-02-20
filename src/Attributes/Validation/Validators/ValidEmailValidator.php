<?php

namespace Rodrigo\OopPhp\Attributes\Validation\Validators;

use Rodrigo\OopPhp\Attributes\Validation\Rules\Contracts\ValidatorInterface;

class ValidEmailValidator implements ValidatorInterface{
    public function validate(mixed $value): bool{
        return validateEmail($value);
        
    }
}

function validateEmail(string $email): bool{
    // 2. Separa o email pelo @
    $emailSeparatedByAt = explode('@',$email);

    // 2.1 Se for um valor inválido é falso
    if(count($emailSeparatedByAt) !== 2){
        return false;
    }

    // 3. Separa pelo ponto
    $emailSeparatedByDot = explode('.', $emailSeparatedByAt[1]);

    // 2.1 Se for inválido retorna falso
    if(count($emailSeparatedByDot) !== 2 ){
        return false;
    }
    
    unset($emailSeparatedByAt, $emailSeparatedByDot);

    return true;
}