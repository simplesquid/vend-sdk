<?php

namespace SimpleSquid\Vend\ThreeZero\Requests\PriceBooks;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\Paginatable;

class ListPriceBooks extends Request implements Paginatable
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/price_books';
    }

    public function __construct(
        protected ?int $after = null,
        protected ?int $before = null,
        protected ?int $pageSize = null,
        protected ?string $order = null,
        protected ?string $direction = null,
        protected ?bool $deleted = null,
        protected ?string $customerGroupId = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'after' => $this->after,
            'before' => $this->before,
            'page_size' => $this->pageSize,
            'order' => $this->order,
            'direction' => $this->direction,
            'deleted' => $this->deleted,
            'customer_group_id' => $this->customerGroupId,
        ]);
    }
}
