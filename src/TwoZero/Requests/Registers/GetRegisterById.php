<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Registers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetRegisterByID
 *
 * Returns a single register with the requested ID.
 */
class GetRegisterById extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/registers/{$this->registerId}";
    }

    /**
     * @param  string  $registerId The register id
     */
    public function __construct(
        protected string $registerId,
    ) {
    }
}
