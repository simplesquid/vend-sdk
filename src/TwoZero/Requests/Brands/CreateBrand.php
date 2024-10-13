<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Brands;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateBrand extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/brands';
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function __construct(
        protected array $payload = [],
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return $this->payload;
    }
}
