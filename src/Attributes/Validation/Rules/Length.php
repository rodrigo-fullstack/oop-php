<?php

namespace Rodrigo\OopPhp\Attributes\Validation\Rules;

use Attribute;
use Rodrigo\OopPhp\Attributes\Validation\Rules\Contracts\LengthValidatorInterface;
use Rodrigo\OopPhp\Attributes\Validation\Rules\Contracts\ValidatorInterface;
use Rodrigo\OopPhp\Attributes\Validation\Rules\Contracts\ValidatorRuleInterface;
use Rodrigo\OopPhp\Attributes\Validation\Validators\LengthValidator;

#[Attribute()]
class Length implements ValidatorRuleInterface{

    public function __construct(int $min, int $max){}

    public function getValidator(): ValidatorInterface|LengthValidatorInterface{
        return new LengthValidator();
    }
}

