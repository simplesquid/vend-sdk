<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Suppliers;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateUpdateSupplier extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/supplier';
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function __construct(
        protected ?array $payload = [],
    ) {
    }

    public function defaultBody(): array
    {
        return $this->payload;
    }
}
