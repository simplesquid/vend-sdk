<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Customers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteCustomerByID
 *
 * Deletes the customer with the requested ID.
 */
class DeleteCustomerById extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/customers/{$this->customerId}";
    }

    /**
     * @param  string  $customerId The customer id
     */
    public function __construct(
        protected string $customerId,
    ) {
    }
}
