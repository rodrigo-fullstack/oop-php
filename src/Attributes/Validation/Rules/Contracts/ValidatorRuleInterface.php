<?php 

namespace Rodrigo\OopPhp\Attributes\Validation\Rules\Contracts;

// 6. criar ValidatorRuleInterface
interface ValidatorRuleInterface{
    public function getValidator(): ValidatorInterface;
}