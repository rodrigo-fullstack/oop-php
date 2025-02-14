<?php

namespace Rodrigo\OopPhp\Exceptions;

// ValueObject para fazer a exceção
final class Email{
    public function __construct(
        private string $email

    ){
        $this->validate();
    }

    public function validate(): bool{
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            throw new \DomainException('Email não é válido...');
        }

        return true;
    }

    public function __tostring(): string{
        return $this->email;
    }
}