<?php

namespace SimpleSquid\Vend\ThreeZero\Requests\PriceBooks;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class UpdatePriceBook extends Request
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/price_books/{$this->id}";
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function __construct(
        protected string $id,
        protected array $payload = [],
    ) {
    }

    public function defaultBody(): array
    {
        return $this->payload;
    }
}
