<?php

namespace SimpleSquid\Vend\Exceptions;

trait HasErrors
{
    /**
     * The array of errors.
     *
     * @var array
     */
    private $errors;

    /**
     * The array of errors.
     *
     * @return array
     */
    public function errors()
    {
        return $this->errors;
    }
}