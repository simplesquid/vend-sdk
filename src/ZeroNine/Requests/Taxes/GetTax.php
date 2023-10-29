<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Taxes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetTax extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/taxes/{$this->taxId}";
    }

    public function __construct(
        protected string $taxId,
    ) {
    }
}
