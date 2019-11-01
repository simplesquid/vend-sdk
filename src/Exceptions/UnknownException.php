<?php

namespace SimpleSquid\Vend\Exceptions;

use Exception;

class UnknownException extends Exception
{
    use HasErrors;

    public function __construct(array $errors = null)
    {
        parent::__construct('An unknown exception has occurred in the request.');

        $this->errors = $errors;
    }
}
