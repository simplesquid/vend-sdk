<?php

namespace SimpleSquid\Vend\TwoZero\Requests\PriceBooks;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class UpdateProductsInPriceBook extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/price_books/{$this->priceBookId}/products";
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function __construct(
        protected string $priceBookId,
        protected array $payload = [],
    ) {
    }

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return $this->payload;
    }
}