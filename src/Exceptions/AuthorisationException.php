<?php

namespace SimpleSquid\Vend\Exceptions;

use Exception;

class AuthorisationException extends Exception
{
    public function __construct()
    {
        parent::__construct('No access token provided.');
    }
}