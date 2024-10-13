<?php

namespace SimpleSquid\Vend\TwoZero\Requests\CustomerGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\Paginatable;

class GetCustomersInCustomerGroup extends Request implements Paginatable
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/customer_groups/{$this->customerGroupId}/customers";
    }

    public function __construct(
        protected string $customerGroupId,
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
