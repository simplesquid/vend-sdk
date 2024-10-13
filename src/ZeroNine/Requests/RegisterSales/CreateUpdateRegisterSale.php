<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\RegisterSales;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateUpdateRegisterSale extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/register_sales';
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function __construct(
        protected ?array $payload = [],
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return $this->payload;
    }
}
