<?php

namespace SimpleSquid\Vend\TwoZero\Requests\CustomerGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteCustomerGroup
 *
 * Delete a customer group
 */
class DeleteCustomerGroup extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/customer_groups/{$this->customerGroupId}";
    }

    /**
     * @param  string  $customerGroupId The customer group id
     */
    public function __construct(
        protected string $customerGroupId,
    ) {
    }
}
