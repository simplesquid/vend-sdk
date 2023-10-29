<?php

namespace SimpleSquid\Vend\TwoZero\Requests\PriceBooks;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class UpdatePriceBook extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/price_books/{$this->priceBookId}";
    }

    public function __construct(
        protected string $priceBookId,
    ) {
    }
}
