<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Registers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class CloseRegister extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/registers/{$this->registerId}/actions/close";
    }

    public function __construct(
        protected string $registerId,
    ) {
    }
}
