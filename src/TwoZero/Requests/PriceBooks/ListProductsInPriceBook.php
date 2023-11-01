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

    /**
     * @param  string[]  $productIds
     */
    public function __construct(
        protected string $priceBookId,
        protected array $productIds = [],
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'product_ids' => implode(',', $this->productIds),
        ]);
    }
}
