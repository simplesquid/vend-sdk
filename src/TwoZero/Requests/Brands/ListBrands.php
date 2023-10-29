<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Brands;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListBrands extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/brands';
    }

    public function __construct(
        protected ?int $before = null,
        protected ?int $pageSize = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'before' => $this->before,
            'page_size' => $this->pageSize,
        ]);
    }
}
