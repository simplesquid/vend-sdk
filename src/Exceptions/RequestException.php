<?php

namespace SimpleSquid\Vend\Exceptions;

use Exception;
use Throwable;

class RequestException extends Exception
{
    public function __construct(Throwable $previous)
    {
        parent::__construct('An error occurred making the request.', 0, $previous);
    }
}