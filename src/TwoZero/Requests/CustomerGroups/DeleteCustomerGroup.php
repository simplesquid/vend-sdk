<?php

namespace SimpleSquid\Vend\TwoZero\Requests\CustomerGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteCustomerGroup extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/customer_groups/{$this->customerGroupId}";
    }

    public function __construct(
        protected string $customerGroupId,
    ) {}
}
