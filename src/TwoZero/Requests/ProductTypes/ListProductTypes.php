<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ProductTypes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListProductTypes extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/product_types';
    }

    public function __construct(
        protected ?int $after = null,
        protected ?int $before = null,
        protected ?int $pageSize = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'after' => $this->after,
            'before' => $this->before,
            'page_size' => $this->pageSize,
        ]);
    }
}
