<?php

namespace SimpleSquid\Vend\TwoZero\Requests\PriceBooks;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class UpdatePriceBookProductsWithPutOp extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/price_books/{$this->priceBookId}/products";
    }

    public function __construct(
        protected string $priceBookId,
    ) {
    }
}
