<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Registers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class OpenRegister extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/registers/{$this->id}/actions/open";
    }

    public function __construct(
        protected string $id,
    ) {
    }
}
