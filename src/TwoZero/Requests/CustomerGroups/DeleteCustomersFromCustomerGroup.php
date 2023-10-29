<?php

namespace SimpleSquid\Vend\TwoZero\Requests\CustomerGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteCustomersFromCustomerGroup extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/customer_groups/{$this->customerGroupId}/customers";
    }

    public function __construct(
        protected string $customerGroupId,
    ) {
    }
}
