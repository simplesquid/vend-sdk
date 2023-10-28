<?php

namespace SimpleSquid\Vend\ThreeZero\Requests\PriceBooks;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetPriceBook extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/price_books/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {
    }
}
