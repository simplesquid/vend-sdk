<?php

namespace SimpleSquid\Vend\TwoZero\Requests\PriceBooks;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListProductsInPriceBook extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/price_books/{$this->priceBookId}/products";
    }

    public function __construct(
        protected string $priceBookId,
        protected ?string $productIds = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'product_ids' => $this->productIds,
        ]);
    }
}
