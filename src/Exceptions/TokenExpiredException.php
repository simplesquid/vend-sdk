<?php

namespace SimpleSquid\Vend\Exceptions;

use Exception;

class TokenExpiredException extends Exception
{
    public function __construct()
    {
        parent::__construct('The access token has expired and needs to be refreshed.');
    }
}