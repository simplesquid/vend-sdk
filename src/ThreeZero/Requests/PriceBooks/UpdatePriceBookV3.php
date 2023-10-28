<?php

namespace SimpleSquid\Vend\ThreeZero\Requests\PriceBooks;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * UpdatePriceBookV3
 *
 * Update a price book by ID
 */
class UpdatePriceBookV3 extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/price_books/{$this->id}";
    }

    /**
     * @param  string  $id The price book id
     */
    public function __construct(
        protected string $id,
    ) {
    }
}
