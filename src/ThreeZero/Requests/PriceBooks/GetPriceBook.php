<?php

namespace SimpleSquid\Vend\ThreeZero\Requests\PriceBooks;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetPriceBook extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/price_books/{$this->priceBookId}";
    }

    public function __construct(
        protected string $priceBookId,
    ) {}
}
