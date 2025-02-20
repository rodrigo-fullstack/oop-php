<?php

namespace Rodrigo\OopPhp\Attributes\Validation\Rules;

use Attribute;
use Rodrigo\OopPhp\Attributes\Validation\Rules\Contracts\ValidatorInterface;
use Rodrigo\OopPhp\Attributes\Validation\Rules\Contracts\ValidatorRuleInterface;
use Rodrigo\OopPhp\Attributes\Validation\Validators\RequiredValidator;

// 2.1 criar attribute do Required
#[Attribute()]
class Required implements ValidatorRuleInterface{
    public function getValidator(): ValidatorInterface{
        return new RequiredValidator();
    } 
}