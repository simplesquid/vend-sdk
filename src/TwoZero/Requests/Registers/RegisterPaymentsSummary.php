<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Registers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class RegisterPaymentsSummary extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/registers/{$this->registerId}/payments_summary";
    }

    public function __construct(
        protected string $registerId,
    ) {
    }
}
