<?php

namespace SimpleSquid\Vend\TwoZero\Requests\CustomerGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteCustomersFromCustomerGroup
 *
 * Deletes the given customers from the customer group.
 *
 * **Note**: Only the link is deleted, the
 * customers are not.
 */
class DeleteCustomersFromCustomerGroup extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/customer_groups/{$this->customerGroupId}/customers";
    }

    /**
     * @param  string  $customerGroupId The customer group id
     */
    public function __construct(
        protected string $customerGroupId,
    ) {
    }
}
