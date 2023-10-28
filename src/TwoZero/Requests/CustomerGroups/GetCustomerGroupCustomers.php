<?php

namespace SimpleSquid\Vend\TwoZero\Requests\CustomerGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetCustomerGroupCustomers
 *
 * Returns a list of customers for the given Customer Group
 */
class GetCustomerGroupCustomers extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/customer_groups/{$this->customerGroupId}/customers";
    }

    /**
     * @param  string  $customerGroupId The customer group id
     * @param  null|int  $before The upper limit for the version numbers to be included in the response.
     * @param  null|int  $pageSize The maximum number of items to be returned in the response.
     */
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
