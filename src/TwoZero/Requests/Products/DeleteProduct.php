<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Products;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteProduct extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/products/{$this->productId}";
    }

    public function __construct(
        protected string $productId,
    ) {
    }
}