<?php

namespace SimpleSquid\Vend\TwoZero\Requests\CustomerGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetCustomerGroupCustomers extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/customer_groups/{$this->customerGroupId}/customers";
    }

    public function __construct(
        protected string $customerGroupId,
        protected ?int $before = null,
        protected ?int $pageSize = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['before' => $this->before, 'page_size' => $this->pageSize]);
    }
}
