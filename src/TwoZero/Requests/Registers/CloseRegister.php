<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Registers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * CloseRegister
 *
 * Closes a single register with the requested ID.
 */
class CloseRegister extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/registers/{$this->registerId}/actions/close";
    }

    /**
     * @param  string  $registerId The register id
     */
    public function __construct(
        protected string $registerId,
    ) {
    }
}
