<?php

namespace SimpleSquid\Vend\TwoZero\Requests\PriceBooks;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeletePriceBook extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/price_books/{$this->priceBookId}";
    }

    public function __construct(
        protected string $priceBookId,
    ) {
    }
}
