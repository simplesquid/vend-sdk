<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Taxes;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateTax extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/taxes';
    }

    public function __construct(
        protected string $name,
        protected float $rate,
    ) {
    }

    public function defaultBody(): array
    {
        return [
            'name' => $this->name,
            'rate' => $this->rate,
        ];
    }
}
