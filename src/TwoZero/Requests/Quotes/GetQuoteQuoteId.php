<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Quotes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetQuoteQuoteId extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/quotes/{$this->quoteId}";
    }

    public function __construct(
        protected string $quoteId,
    ) {
    }
}
