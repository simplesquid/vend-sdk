<?php

namespace SimpleSquid\Vend\TwoZero\Requests\CustomerGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetCustomerGroupById
 *
 * Return given customer group
 */
class GetCustomerGroupById extends Request
{
    protected Method $method = Method::GET;

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
