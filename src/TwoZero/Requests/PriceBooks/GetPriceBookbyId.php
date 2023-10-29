<?php

namespace SimpleSquid\Vend\TwoZero\Requests\PriceBooks;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetPriceBookbyId extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/price_books/{$this->priceBookId}";
    }

    public function __construct(
        protected string $priceBookId,
    ) {
    }
}
