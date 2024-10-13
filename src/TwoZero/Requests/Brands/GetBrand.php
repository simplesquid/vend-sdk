<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Brands;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetBrand extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/brands/{$this->brandId}";
    }

    public function __construct(
        protected string $brandId,
    ) {}
}
