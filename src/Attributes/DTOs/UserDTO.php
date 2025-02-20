<?php
namespace Rodrigo\OopPhp\Attributes\DTOs;

use Rodrigo\OopPhp\Attributes\Validation\Rules\Length;
use Rodrigo\OopPhp\Attributes\Validation\Rules\Required;
use Rodrigo\OopPhp\Attributes\Validation\Rules\ValidEmail;
use Rodrigo\OopPhp\Attributes\Validation\Validator;

// --------------------
// Attributes (Annotations)
// --------------------

// 1. criar classe onde os attributes serão implementados
class UserDTO
{ //readonly pois somente se define uma única vez no construtor
    public function __construct(
        // 2.2 atribuir o Required
        #[Length(5, 50)]
        #[Required]
        private string $name, 

        #[ValidEmail]
        #[Length(5, 255)]
        #[Required]
        private string $email,
    ) {
        try{
            $validator = new Validator();
            $validator->validate($this);

        } catch(\Exception $e){
            echo $e->getMessage() . PHP_EOL;
            unset($this->name);
            unset($this->email);
        }
        
    }
}
