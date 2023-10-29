<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Brands;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class UpdateBrand extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/brands/{$this->brandId}";
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function __construct(
        protected string $brandId,
        protected array $payload = [],
    ) {
    }

    public function defaultBody(): array
    {
        return $this->payload;
    }
}
