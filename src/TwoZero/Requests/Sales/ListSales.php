<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Sales;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\Paginatable;

class ListSales extends Request implements Paginatable
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/sales';
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
