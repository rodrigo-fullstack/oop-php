<?php

namespace Rodrigo\OopPhp\Attributes\Validation\Rules;

use Attribute;
use Rodrigo\OopPhp\Attributes\Validation\Rules\Contracts\ValidatorInterface;
use Rodrigo\OopPhp\Attributes\Validation\Rules\Contracts\ValidatorRuleInterface;
use Rodrigo\OopPhp\Attributes\Validation\Validators\ValidEmailValidator;

#[Attribute()]
class ValidEmail implements ValidatorRuleInterface{

    public function getValidator(): ValidatorInterface{
        return new ValidEmailValidator();
    }
}