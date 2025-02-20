<?php

namespace Rodrigo\OopPhp\Attributes\Validation;

use Rodrigo\OopPhp\Attributes\Validation\Rules\Contracts\ValidatorRuleInterface;

// 3. criar classe Validator
class Validator{
    private ?array $errors;

    public function validate(Object $object):void {
        $reflectionClass = new \ReflectionClass($object);

        // dd($reflectionClass);
        // $reflectionClass->getProperties()[0]->getAttributes()[0];

        // 1. lógica receba as propriedades
        $properties = $reflectionClass->getProperties();

        // 1.1 lógica: passando no foreach
        foreach($properties as $property){
            // 2. lógica: para cada propriedade retorna os seus atributos que implementam ValidatorRUleInterface e é instância de ReflectionAttribute
            $attributes = $property->getAttributes(
                name: ValidatorRuleInterface::class,
                flags: \ReflectionAttribute::IS_INSTANCEOF
            );

            // 2.1 lógica: passando no foreach
            foreach($attributes as $attribute){
                
                // dd($attribute->arguments);
                
                // 3. lógica: instacia o validador pelo attributo com o método getValidator()
                $validator = $attribute->newInstance()->getValidator();
                
                // 4. lógica: Vlaidados os dados
                if(!$validator->validate($property->getValue($object), ...$attribute->getArguments())){
                    
                    // 5. lógica: se não for válido atribui um erro na propriedade errors
                    $validatorOfError = explode('\\', $attribute->getName());
                    $validatorOfError = $validatorOfError[count($validatorOfError) - 1];
                    $this->errors[$property->getName()] = sprintf(
                        "Invalid value %s for '%s' in validation '%s'.",
                        $property->getValue($object) === '' ? 'null' : $property->getValue($object),
                        $property->getName(),
                        $validatorOfError
                    );
                }
            }
        }

        // 6. se há erros, retorna uma exceção;
        if(isset($this->errors)){
            $errors = $this->errors;
            unset($this->errors);
            throw new \Exception(
                json_encode($errors,
                 JSON_PRETTY_PRINT));
        }
    }

    public function getErrors(){
        return $this->errors;
    }
}