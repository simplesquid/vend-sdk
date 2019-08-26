<?php

namespace SimpleSquid\Vend\Exceptions;

use Exception;

class AuthorisationException extends Exception
{
    /**
     * Create a new exception instance.
     */
    public function __construct()
    {
        parent::__construct('No access token entered.');
    }
}