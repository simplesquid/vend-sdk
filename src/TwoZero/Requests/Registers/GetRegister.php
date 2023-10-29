<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Registers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetRegister extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/registers/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {
    }
}
