<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Products;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetPriceBooksForProduct extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/products/{$this->productId}/price_book_products";
    }

    public function __construct(
        protected string $productId,
    ) {}
}
