<?php

namespace SimpleSquid\Vend\TwoZero\Requests\PriceBooks;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeletePriceBookProducts
 *
 * Delete price book product entries.
 *
 * > **Note**: You may not delete more than 100 price book products
 * at a time.
 *
 * > **Note**: The request body params can be used within request headers. Header key name
 * is `data`
 */
class DeletePriceBookProducts extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/price_books/{$this->priceBookId}/products";
    }

    /**
     * @param  string  $priceBookId The price book id
     */
    public function __construct(
        protected string $priceBookId,
    ) {
    }
}
