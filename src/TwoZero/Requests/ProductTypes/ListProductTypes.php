<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ProductTypes;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\Paginatable;

class ListProductTypes extends Request implements Paginatable
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
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'after' => $this->after,
            'before' => $this->before,
            'page_size' => $this->pageSize,
        ]);
    }
}
