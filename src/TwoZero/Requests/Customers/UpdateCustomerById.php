<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Customers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class UpdateCustomerById extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/customers/{$this->customerId}";
    }

    public function __construct(
        protected string $customerId,
    ) {
    }
}
