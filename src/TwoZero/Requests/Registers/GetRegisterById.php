<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Registers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetRegisterById extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/registers/{$this->registerId}";
    }

    public function __construct(
        protected string $registerId,
    ) {
    }
}
