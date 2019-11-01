<?php

namespace SimpleSquid\Vend\Exceptions;

use Exception;

class BadRequestException extends Exception
{
    use HasErrors;

    public function __construct(array $errors = null)
    {
        parent::__construct('The request could not be completed due to errors.');

        $this->errors = $errors;
    }
}
