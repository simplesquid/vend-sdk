<?php

namespace SimpleSquid\Vend\Exceptions;

use Exception;

class UnauthorisedException extends Exception
{
    /**
     * Create a new exception instance.
     */
    public function __construct()
    {
        parent::__construct('Request not authorised with provided access token or method.');
    }
}