<?php

namespace SimpleSquid\Vend\TwoZero\Requests\CustomerGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetCustomerGroup extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/customer_groups/{$this->customerGroupId}";
    }

    public function __construct(
        protected string $customerGroupId,
    ) {
    }
}
