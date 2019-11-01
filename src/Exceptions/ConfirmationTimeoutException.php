<?php

namespace SimpleSquid\Vend\Exceptions;

use Exception;

class ConfirmationTimeoutException extends Exception
{
    /** @var array */
    private $output;

    public function __construct(array $output)
    {
        parent::__construct('Script timed out while waiting for the process to be confirmed.');

        $this->output = $output;
    }

    /**
     * The output returned from the operation.
     *
     * @return array
     */
    public function output()
    {
        return $this->output;
    }
}
