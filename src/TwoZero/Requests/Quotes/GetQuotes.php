<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Quotes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetQuotes extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/quotes';
    }

    public function __construct(
        protected ?int $limit = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit]);
    }
}
