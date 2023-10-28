<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Customers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * UpdateCustomerByID
 *
 * Updates the customer with the requested ID.
 */
class UpdateCustomerById extends Request
{
    protected Method $method = Method::PUT;

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
