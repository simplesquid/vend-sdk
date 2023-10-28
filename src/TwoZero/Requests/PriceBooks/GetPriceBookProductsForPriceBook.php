<?php

namespace SimpleSquid\Vend\TwoZero\Requests\PriceBooks;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetPriceBookProductsForPriceBook
 *
 * Returns a list of price book products for a given price book.
 *
 * > **Note**: The returned retail price
 * is the tax exclusive price of the product.
 */
class GetPriceBookProductsForPriceBook extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/price_books/{$this->priceBookId}/products";
    }

    /**
     * @param  string  $priceBookId The price book id
     * @param  null|string  $productIds The product ids
     */
    public function __construct(
        protected string $priceBookId,
        protected ?string $productIds = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['product_ids' => $this->productIds]);
    }
}
