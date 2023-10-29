<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Quotes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetQuote extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/quotes/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {
    }
}
