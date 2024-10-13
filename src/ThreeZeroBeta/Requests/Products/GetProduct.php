<?php

namespace SimpleSquid\Vend\ThreeZeroBeta\Requests\Products;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetProduct extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/products/{$this->productId}";
    }

    public function __construct(
        protected string $productId,
    ) {}
}
