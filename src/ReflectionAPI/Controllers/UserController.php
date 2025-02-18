<?php
namespace Rodrigo\OopPhp\ReflectionAPI\Controllers;

use Rodrigo\OopPhp\ReflectionAPI\Databases\DB;
use Rodrigo\OopPhp\ReflectionAPI\Mail\Mail;
use Rodrigo\OopPhp\ReflectionAPI\Services\UserService;
use Rodrigo\OopPhp\ReflectionAPI\Validation\Validation;

class UserController
{
    public function __construct(
        protected DB $db,
        protected Mail $mail,
        protected Validation $validation,
        protected UserService $userService
    ) {}
}
